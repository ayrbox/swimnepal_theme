<?php


$blogs_content = hamro_do_shortcode('hamro_latest_posts');

?>

<div class="container mb-5 mt-5">
    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-12 text-center">
            <h1>News &amp; Events</h1>
            <p class="lead">
                Keep in touch with latest news and blogs.
            </p>
        </div>
    </div>
    
    <div class="row justify-content-center mb-5 mt-5">
        <?php echo $blogs_content; ?>        
    </div>
    
</div>