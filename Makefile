# Makefile for Hugo commands

HUGO = hugo
PUBLIC_DIR = public
LOCAL_IP = 192.168.0.221

.PHONY: build test test-fast-render clean

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