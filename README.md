# Madagascar Theme
A simple boilerplate theme for Simtail websites

This theme is ideally suited to generic websites that use a combination of WordPress, Elementor, and WooCommerce. I've written a Gruntfile
to handle some basic automation tasks like compiling Sass/SCSS to CSS and live reloading in the browser with BrowserSync. I haven't yet
added any linting or minifying plugins, but they may come later.

To use you this, copy this repository to your Wordpress theme directory, and install the required Node packages using the following command:

```bash
npm install --save-dev grunt sass grunt-banner grunt-dart-sass grunt-contrib-watch
```

You will also need the BrowserSync package installed globally with `npm install -g browser-sync` followed by adding it to your project 
locally with `npm install --save-dev grunt-browser-sync`

**Important:** Remember to delete the .git directory and initialise your own git repo for individual websites projects.

Other Notes:
- change the `proxy` value in the BrowserSync options (in Gruntfile.js) to the URL of your projects test site.
