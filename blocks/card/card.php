<?php
$class_name = 'block-card';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

//
$post_object_id = get_field('post_object_id');

$query_args = array(
    'p' => $post_object_id
);

$the_query = new WP_Query($query_args);
?>
<div class="<?php echo esc_attr( $class_name ); ?>">

    <?php
    if ($the_query->have_posts()):

        while ($the_query->have_posts()):

            $the_query->the_post();
            get_template_part('loop-parts/card', 'default');

        endwhile;

    endif;
    ?>

</div>