<?php
/**
 * Archive
 * 
 * https://developer.wordpress.org/themes/basics/template-hierarchy/
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