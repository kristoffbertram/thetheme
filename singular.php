<?php
/**
 * Singular (Post, Page or Custom Post Type)
 * 
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 */
get_header();
?>

    <main>

        <?php
        if (have_posts()):

            while (have_posts()):

                the_post();

                the_content();

            endwhile;

        endif;
        ?>

    </main>

<?php
get_footer();