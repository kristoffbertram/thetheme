# The Theme (thetheme)

_1.0.2_

This is my noble attempt at a as-versatile-as-possible Best Practices Boilerplate WordPress Theme using Tailwind. It offers a build-process, sets up certain "enhancements" to WordPress, and using Advanced Custom Fields; offers a bullet-proof technique of adding custom blocks.  

This is a "developer-first" Theme and may not be suited for absolute beginners.  
It assumes you understand WP's Theme Hierarchy, feel comfortable working with the command line and are familiar with Tailwind's utility classes.

## Developing

### WordPress' functions.php

Is delegated to ``~/thetheme-functions.php``. Use this file instead to extend your theme.

### Theme Images

There is no support for image processing at this time.  
Any image outside of WP's Media Library is used (and can be stored) as is.
The Theme itself does offer support for a multitude of formats and sizes.  
Refer to ``~/thetheme_modules/images.php`` or ``~/thetheme-functions.php`` for more information.

### Theme CSS & JS

First, run:

```
npm install
```

The Theme is set up to enqueue ``app.css`` and ``app.js``. Refer to ``~/thetheme_modules/enqueue.php`` for its precise use.
To get started, open the contents of ``/src/css`` and ``/src/js/`` and run the command below.  
Your built files will appear in ``~/css/`` and ``~/js/``.

```
npm run watch
```

#### Tailwind, The Theme Helper, tailwind.config

The Theme uses WP's theme.json to generated the necessary Tailwind utility classes.

### ACF

Create a new block by defining it in ``~/blocks/``.  
ACF will sync your blocks throughout deployment by storing them in ``~/acf-json/``. In addition, these static files allow you to programmatically or manually modify them.
You can optionally add its required CSS or JS files to your build process in webpack.mix.js.  

```
mix.postCss("blocks/your-block/your-block.css", "css");
```

See ``~/thetheme_modules/acf.php`` for more information.  
Two sample blocks (``Card`` and ``Wrapper``) are included to get you started.

## Upgrading

Upgrade by downloading thetheme-core at https://github.com/kristoffbertram/thetheme-core.

## TODO

* Fix Tailwind font loading.
* Better overriding of WP's Gutenberg Presets.