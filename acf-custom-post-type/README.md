# ACF + Custom Post Type + REST API Example

This plugin registers a **Portfolio** custom post type with Advanced Custom Fields.

## Features
- Registers a `portfolio` CPT.
- Adds custom fields: Client Name, Project URL.
- Exposes fields in the WordPress REST API (`/wp-json/wp/v2/portfolio`).

## Usage
1. Activate Advanced Custom Fields (Pro or Free).
2. Drop this plugin into `wp-content/plugins/acf-custom-post-type`.
3. Activate in WordPress Admin.
4. Add portfolio entries → view them in `/wp-json/wp/v2/portfolio`.
