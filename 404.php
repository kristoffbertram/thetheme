<?php
/**
 * 404
 * 
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 * 
 */
get_header();
?>

    <main>

        <h1 class="wp-block-heading">The requested URL was not found.</h1>

        <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
            <div class="wp-block-button"><a href="<?php echo get_home_url(); ?>" class="wp-block-button__link wp-element-button">Go Home</a></div>
        </div>
        
    </main>

<?php
get_footer();