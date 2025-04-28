# Makefile for Hugo commands

HUGO = hugo
PUBLIC_DIR = public
LOCAL_IP = 192.168.0.221
INSTALL_DIR = /mnt/data/nginx/config/www

# Default target - shows help information
all: help

# Display help information about available make commands
.PHONY: help
help:
	@echo "Available commands:"
	@echo "  make build            - Build the Hugo site"
	@echo "  make test             - Start Hugo server with fast render disabled (better for testing)"
	@echo "  make test-fast-render - Start Hugo server with fast render enabled (faster previews)"
	@echo "  make update-repo      - Update git repository and all submodules"
	@echo "  make install          - Update repo, build site, and deploy to production directory"
	@echo "  make clean            - Remove the compiled site directory"
	@echo ""
	@echo "For server deployment, typically use: make install"

# Build the site
.PHONY: build
build: 
	$(HUGO)

# Start the Hugo server with fast render disabled (good for testing content changes)
.PHONY: test
test:
	$(HUGO) server --disableFastRender --bind=0.0.0.0 --baseURL=http://$(LOCAL_IP):1313

# Start the Hugo server with default (fast render enabled)
.PHONY: test-fast-render
test-fast-render:
	$(HUGO) server --bind=0.0.0.0 --baseURL=http://$(LOCAL_IP):1313

# Update the repository and all submodules (useful for deployment server)
.PHONY: update-repo
update-repo:
	@echo "Updating git repository..."
	git fetch
	git pull
	@echo "Updating git submodules..."
	git submodule update --init --recursive

# Update repo, build, and deploy to production directory
.PHONY: install
install: update-repo build
	@echo "Syncing to target directory..."
	sudo rsync -av --delete $(PUBLIC_DIR)/ $(INSTALL_DIR)
	@echo "Setting appropriate permissions..."
	sudo chown -R root:root $(INSTALL_DIR)
	@echo "Installation complete!"

# Clean up the compiled site
.PHONY: clean
clean:
	rm -rf $(PUBLIC_DIR)