<?php
$collections = get_terms(
    'product_cat',
    array(
    "hide_empty" => false,
    "slug" => array(
        "fashion-clothings",
        "accessories",
        "decor-furniture")
    )
);

foreach ($collections as $c) {
    $c->link = get_term_link($c, 'product_cat');
    $c->image_id = get_woocommerce_term_meta($c->term_id, 'thumbnail_id', true);
    $c->image_url = wp_get_attachment_url($c->image_id);
}
?>
<div class="container">
    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-12 text-center">
            <h1>Collections</h1>
        </div>
    </div>    
    <div class="row justify-content-center">
        <?php foreach ($collections as $c):?>            
        <div class="col-sm-4 col-xs-12">
            <a class="collection-item" href="<?php echo $c->link;?>">
                <div class="collection-image" style="background-image: url('<?php echo $c->image_url; ?>');"></div>
                <div class="collection-overlay"></div>
                <h3 class="collection-title">
                    <?php echo $c->name; ?>                    
                </h3>
            </a>
        </div>
        <?php endforeach; ?>        
    </div>
</div>