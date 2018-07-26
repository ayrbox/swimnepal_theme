
<div class="container">
 <div class="row justify-content-center mb-5 mt-5">
    <div class="col-12 text-center">
      <h1>Our Products</h1>
    </div>
  </div>
  <?php echo do_shortcode('[products]'); ?>
</div>


<?php

/**
// Sales Product Query

$args = array(
  'post_type'      => 'product',
  'meta_query'     => array(
      'relation' => 'OR',
      array( // Simple products type
          'key'           => '_sale_price',
          'value'         => 0,
          'compare'       => '>',
          'type'          => 'numeric'
      ),
      array( // Variable products type
          'key'           => '_min_variation_sale_price',
          'value'         => 0,
          'compare'       => '>',
          'type'          => 'numeric'
      )
  )
);

*/
