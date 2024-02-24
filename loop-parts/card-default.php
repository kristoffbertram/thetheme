<?php
/**
 * A sample Card, which is both in use as a Block and Loop Part.
 */
?>

<a class="block-card default">

    <div class="card-content">

        <div class="inner">

            <p class="font-medium"><?php echo get_the_title(); ?></p>

            <p class="md:w-4/6"><?php echo get_the_excerpt(); ?></p>

        </div>

    </div>

</a>