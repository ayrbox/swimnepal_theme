<?php 

function add_minicart_menu($item_output, $item)
{
    if ('MINICART' == $item->attr_title) {
        ob_start(); ?>
            <li class="nav-item">
                <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart() ?>
                </div>
            </li>
        <?php
        $minicart_fragment = ob_get_clean();
        return $minicart_fragment;
    }
    return $item_output;
}



add_filter('walker_nav_menu_start_el', 'add_minicart_menu', 10, 2);




function add_search_menu($item_output, $item)
{
    if ('SEARCH' == $item->attr_title) {
        ob_start(); ?>
            <li class="nav-item position-relative">
                <a class="nav-link nav-search-toggler" href="#"></a>
                <div class="nav-search-form">
                    <?php get_product_search_form(); ?>
                </div>
            </li>
        <?php
        $minicart_fragment = ob_get_clean();
        return $minicart_fragment;
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'add_search_menu', 10, 2);




function hamro_latest_posts()
{
    global $post;
    
    $post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 4
    );

    $my_query = new WP_Query($post_args);
    $html = "";

    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    
    $html .= "<div class='col-sm-6 col-md-6'>";
    $html .= "<article class='latest-post'>";

    $html .= "<div class='image-cover'>";
    $html .= "<img src='$image_url' alt='blog image'/>";
    $html .= "</div>";
    
    $html .= "<div class='blog-info-block'>";
    $html .= "<h2><a href=\"" . get_permalink() ."\">" . get_the_title() . "</a> </h2>";

    $html .= "<h6 class=\"d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0\"><i class=\"fa fa-calendar\"></i> ".get_the_date('d/m/Y')."</h6>";
    
    
    $html .= "</div>";
    //get_the_excerpt()
    //get_permalink()
    
    $html .= "</article>";
    $html .= "</div>";
    endwhile;
    endif;
    return $html;
}
add_shortcode('hamro_latest_posts', 'hamro_latest_posts');
