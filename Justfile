# Justfile for Hugo commands
#
# Deployment is no longer done from here. Pushing to master triggers
# .gitea/workflows/deploy.yaml, which builds on a Gitea Actions runner and
# rsyncs into the nginx content directory. Hugo is no longer installed on the
# server.

# Define variables
hugo := "hugo"
public_dir := "public"
local_ip := "192.168.0.221"

# Default recipe - shows help information (just --list also works)
@help:
    just -l

# Build every app in data/apps.json and install under public/apps/
# Same script the CI workflow runs, so local and CI builds cannot drift.
build-apps:
    ./scripts/build-apps.sh

# Build the site
build: build-apps
    {{hugo}}

# Start the Hugo server with fast render disabled (good for testing content changes)
test-with-apps: build-apps
    {{hugo}} server --disableFastRender --bind=0.0.0.0 --baseURL=http://{{local_ip}}:1313

# Start the Hugo server with fast render disabled (good for testing content changes)
test:
    {{hugo}} server --disableFastRender --bind=0.0.0.0 --baseURL=http://{{local_ip}}:1313

# Start the Hugo server with default (fast render enabled)
test-fast-render:
    {{hugo}} server --bind=0.0.0.0 --baseURL=http://{{local_ip}}:1313

# Clean up the compiled site and cached app checkouts
clean:
    rm -rf {{public_dir}}
    rm -rf .apps-cache
