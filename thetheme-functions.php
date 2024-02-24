<?php
/**
 * The Theme Functions
 * 
 * @see functions.php
 * 
 * Use this file to include your custom functions.
 */


/**
 * The Theme Images
 * 
 * @uses The_Theme_Image_Sizes
 * 
 * Choose the necessary thumbnails by populating this array. E.g.
 * $thetheme_images = ['square-xxs','169-md'];
 * Alternatively, add your own custom formats.
 */
$selected_image_sizes = [
    'thumb-xs',
    'thumb-sm','thumb-md','thumb-lg','thumb-xl',
    '169-sm','169-md','169-lg','169-xl',
    '43-sm','43-md','43-lg',
    '34-md','34-lg'
];
$custom_image_sizes = [];
$theme_image_sizes = new The_Theme_Image_Sizes($selected_image_sizes, $custom_image_sizes);

/**
 * Custom Mimetype Upload 
 * 
 * @uses The_Theme_Allow_Custom_Mimes
 * 
 * Allow uploading custom mimetypes to WP's Media Library.
 */
$new_mimes = [
    'svg' => 'image/svg+xml',
    'zip' => 'application/zip',
    'gz'  => 'application/x-gzip',
];
new The_Theme_Allow_Custom_Mimes($new_mimes);

/**
 * Site Menus
 */
register_nav_menus( array(
    'primary' => __( 'Primary', 'the_theme' ) ,
    'secondary' => __( 'Secondary', 'the_theme' ) ,
));