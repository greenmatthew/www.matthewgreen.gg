# Makefile for Hugo commands

HUGO = hugo
PUBLIC_DIR = public
LOCAL_IP = 192.168.0.221
INSTALL_DIR = /mnt/data/nginx/config/www

.PHONY: build test test-fast-render clean install

# Build the site
build:
	$(HUGO)

# Start the Hugo server with fast render disabled (good for testing content changes)
test:
	$(HUGO) server --disableFastRender --bind=0.0.0.0 --baseURL=http://$(LOCAL_IP):1313

# Start the Hugo server with default (fast render enabled)
test-fast-render:
	$(HUGO) server --bind=0.0.0.0 --baseURL=http://$(LOCAL_IP):1313

# Clean up the compiled site
clean:
	rm -rf $(PUBLIC_DIR)

# Install to production directory
install: build
	@echo "Syncing to target directory..."
	sudo rsync -av --delete $(PUBLIC_DIR)/ $(INSTALL_DIR)  # Note the trailing slash in PUBLIC_DIR
	@echo "Setting appropriate permissions..."
	sudo chown -R root:root $(INSTALL_DIR)
	@echo "Installation complete!"
