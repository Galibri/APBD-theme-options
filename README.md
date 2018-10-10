# APBD theme options
By Muhammad Asadullah Al Galib
https://galibweb.com

## About

This options framework is an extended version of Codestar Framework which works with any WordPress theme.
This options panel has the follwoing features:

* Global and Logo settings
* Header options settings
* Navigation Menu options
* Blog Page options
* Footer options
* Soical Profiles
* Typography settings
* Extra css and js options
* Options panel backup panel

## Requirements

* Well coded theme
* Manually include the options value inside your theme using wp_head filter

## Get started

1. Copy this repository inside your theme.
2. Add framework include code on your theme `themename/functions.php` file

```php
require_once dirname( __FILE__ ) .'/APBD-theme-options/theme-options-and-metabox.php';
// -(or)-
require_once get_template_directory() .'/APBD-theme-options/theme-options-and-metabox.php';
```

## Thanks

If you find any difficulties, feel free to contact me here: https://galibweb.com
