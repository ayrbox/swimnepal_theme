<?php 
$feature_content = hamro_do_shortcode('products', array(
    'per_page' => 4,
    'columns' => 4,
    'orderby' => 'date',
    'order' => 'desc',
    'visibility' => 'featured',
)); ?>


<div class="container mb-5 mt-5">
    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-12 text-center">
            <h1>Featured Products</h1>            
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="" style="overflow:hidden;">
                <?php echo $feature_content;?>
            </ul>
        </div>
    </div>
</div>