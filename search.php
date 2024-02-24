<?php
/**
 * Search
 * 
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * 
 */
get_header();
?>

    <main>

        <?php if (get_search_query()): ?>

            Your search results for "<?php echo get_search_query(); ?>"

        <?php endif; ?>
        <?php
        if (have_posts()):
        ?>

            <?php            
            while (have_posts()):

                the_post();

                get_template_part('loop-parts/card', 'default');

            endwhile;
            ?>

        <?php
        endif;
        ?>

    </main>

<?php
get_footer();