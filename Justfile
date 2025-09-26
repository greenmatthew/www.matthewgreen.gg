# Justfile for Hugo commands

# Define variables
hugo := "hugo"
public_dir := "public"
apps_dir := "{{public}}/apps"
local_ip := "192.168.0.221"
install_dir := "/mnt/data/nginx/config/www"

# Default recipe - shows help information (just --list also works)
@help:
    just -l

# Build apps and sync to static directory
build-apps:
    echo "Building monthly-budget-planner..."
    {{hugo}} --source apps/monthly-budget-planner --minify --cleanDestinationDir
    echo "Syncing monthly-budget-planner to public directory..."
    rsync --mkpath -av --delete apps/monthly-budget-planner/public/ {{apps_dir}}/monthly-budget-planner/
    echo "Syncing dnd-near to public directory..."
    rsync --mkpath -av --delete apps/dnd-near/ {{apps_dir}}/dnd-near/
    echo "Apps updated/built and installed successfully!"

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
    rm -rf apps/monthly-budget-planner/public/
    rm -rf {{public_dir}}