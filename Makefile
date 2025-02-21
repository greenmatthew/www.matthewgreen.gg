# Makefile for Hugo commands

HUGO = hugo
PUBLIC_DIR = public

.PHONY: build test test-fast-render clean

# Build the site
build:
	$(HUGO)

# Start the Hugo server with fast render disabled (good for testing content changes)
test:
	$(HUGO) server --disableFastRender

# Start the Hugo server with default (fast render enabled)
test-fast-render:
	$(HUGO) server

# Clean up the compiled site
clean:
	rm -rf $(PUBLIC_DIR)
