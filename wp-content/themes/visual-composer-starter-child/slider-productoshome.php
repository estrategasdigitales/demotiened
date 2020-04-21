<div class="container productoshome">

<?php 
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'post_status' => 'publish',
    );
    $query = new WP_Query($args);
    foreach($query->posts as $p):
    $pid = $p->ID;
    $product = wc_get_product($pid);
    
?>
<div class="col-md-4">
    <a class="contenedorprodc" href="<?php echo get_permalink($pid); ?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pid  ), 'single-post-thumbnail' );?>
    <img src="<?php  echo $image[0]; ?>">
        <div class="infoproducto">
            <p><?php echo $p->post_title; ?><p>
            <span><?php echo $product->get_price_html(); ?></span>
        </div>
        <?php
        
        ?>
        
    </a>
</div>


<?php endforeach; ?>
</div>