<?php
$class_name = 'block-wrapper';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>
<div class="<?php echo esc_attr( $class_name ); ?>">

    <InnerBlocks />

</div>