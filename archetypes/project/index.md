---
title: "{{ replace .Name "-" " " | title }}"
id: "{{ .Name | urlize }}"
priority: 0  # Controls order in listings (lower numbers appear first)
type: "project"
draft: true  # Set to true to hide this project from production

summary: "Brief description of the {{ replace .Name "-" " " | title }} project."
# Preview image for listings
previewImage:
    src: "projects/{{ .Name | urlize }}/preview.png"
    alt: "{{ replace .Name "-" " " | title }} Preview"
---

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.