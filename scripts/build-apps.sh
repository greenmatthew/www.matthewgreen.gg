#!/usr/bin/env sh
#
# Build every app listed in data/apps.json and install it under public/apps/.
#
# One script, used by both `just build-apps` and the Gitea Actions workflow, so
# local and CI builds cannot drift. Replaces the per-app submodule + hardcoded
# Justfile recipe arrangement -- adding an app is now one entry in the registry.
#
# Registry schema (data/apps.json). JSON rather than TOML/YAML because jq is the
# only parser present both on the workstation and in the runner image, and Hugo
# reads JSON data files natively for the Milestone 3 apps listing.
#
#   name    directory published under public/apps/<name>/
#   repo    clone URL
#   ref     branch or tag to build (a bare commit SHA will NOT work -- shallow
#           clone by SHA needs server-side config Gitea does not enable)
#   build   shell command run inside the checkout; empty string means the app is
#           plain static files and is copied verbatim
#   output  directory within the checkout to publish, relative; "." for the
#           whole checkout
#   listed  reserved for Milestone 3's apps index; unused by this script
#
# Local development: if apps/<name>/ exists it is used as-is and never fetched,
# so you can hack on an app in place against the real site. Otherwise the app is
# cloned into $APPS_CACHE (default .apps-cache/, overridden in CI to a path on
# the runner's persistent volume so it survives actions/checkout's clean).
set -eu

REGISTRY="data/apps.json"
CACHE="${APPS_CACHE:-.apps-cache}"
DEST="public/apps"

command -v jq >/dev/null 2>&1 || { echo "build-apps: jq is required" >&2; exit 1; }
[ -f "$REGISTRY" ] || { echo "build-apps: $REGISTRY not found (run from repo root)" >&2; exit 1; }

count=$(jq '.apps | length' "$REGISTRY")
i=0

while [ "$i" -lt "$count" ]; do
    # @sh quotes each value, so this is safe against spaces and shell
    # metacharacters in the registry.
    eval "$(jq -r --argjson i "$i" \
        '.apps[$i] | @sh "name=\(.name) repo=\(.repo) ref=\(.ref) build=\(.build) output=\(.output)"' \
        "$REGISTRY")"
    i=$((i + 1))

    if [ -d "apps/$name" ]; then
        src="apps/$name"
        echo "==> $name: using local checkout at $src"
    else
        src="$CACHE/$name"
        if [ -d "$src/.git" ]; then
            echo "==> $name: updating $src to $ref"
            git -C "$src" fetch --depth 1 origin "$ref"
            git -C "$src" reset --hard FETCH_HEAD
            git -C "$src" clean -fdx
        else
            echo "==> $name: cloning $repo at $ref"
            rm -rf "$src"
            mkdir -p "$CACHE"
            git clone --depth 1 --branch "$ref" "$repo" "$src"
        fi
    fi

    if [ -n "$build" ]; then
        echo "==> $name: building"
        (cd "$src" && sh -c "$build")
    else
        echo "==> $name: static, no build step"
    fi

    [ -d "$src/$output" ] || { echo "build-apps: $name declares output '$output' but $src/$output does not exist" >&2; exit 1; }

    echo "==> $name: installing to $DEST/$name/"
    mkdir -p "$DEST/$name"
    # For apps published with output ".", anything sitting in the checkout root
    # gets served publicly. Exclude the things that are never part of the app:
    # the checkout's own git metadata, its CI config, and agent tooling config
    # (Claude Code projects .claude/ and .mcp.json into whatever directory it
    # is working in, so these appear in local builds without being committed).
    rsync -a --delete --exclude='.git' --exclude='.gitea' \
        --exclude='.claude' --exclude='.mcp.json' \
        "$src/$output/" "$DEST/$name/"
done

echo "==> all apps installed under $DEST/"
