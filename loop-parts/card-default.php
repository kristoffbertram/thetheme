<?php
/**
 * A sample Card, which is both in use as a Block and Loop Part.
 */

$image_id = get_post_thumbnail_id( get_the_ID() );
$size = '43-sm';
?>

<a class="card default" <?php if (!is_admin()): ?> href="<?php the_permalink(); ?>"<?php endif; ?>>

    <div class="card-image">

        <?php
        thetheme_image( $image_id , $size );
        ?>

    </div>

    <div class="card-content">

        <div class="inner">

            <p class="font-medium"><?php echo get_the_title(); ?></p>

            <p class="md:w-4/6"><?php echo get_the_excerpt(); ?></p>

        </div>

    </div>

</a>