# Justfile for Hugo commands

# Define variables
hugo := "hugo"
public_dir := "public"
local_ip := "192.168.0.221"
install_dir := "/mnt/data/nginx/config/www"

# Default recipe - shows help information (just --list also works)
@help:
    just -l

# Build the site
build:
    {{hugo}}

# Start the Hugo server with fast render disabled (good for testing content changes)
test:
    {{hugo}} server --disableFastRender --bind=0.0.0.0 --baseURL=http://{{local_ip}}:1313

# Start the Hugo server with default (fast render enabled)
test-fast-render:
    {{hugo}} server --bind=0.0.0.0 --baseURL=http://{{local_ip}}:1313

# Update the repository and all submodules (useful for deployment server)
update-repo:
    @echo "Updating git repository..."
    git fetch
    git pull
    @echo "Updating git submodules..."
    git submodule update --init --recursive

# Update repo, build, and deploy to production directory
install: update-repo build
    @echo "Syncing to target directory..."
    sudo rsync -av --delete --stats {{public_dir}}/ {{install_dir}}
    @echo "Setting appropriate permissions..."
    sudo chown -R root:root {{install_dir}}
    @echo "Installation complete!"

# Clean up the compiled site
clean:
    rm -rf {{public_dir}}