<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<!-- FOOTER -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">      
        <div class="col-md-3">
          <h4 class="footer-heading">About</h4>
					<?php wp_nav_menu(
                array(
                    'theme_location'  => 'footer-menu',
                    'container_class' => 'footer-menu-wrapper',
                    'container_id'    => 'footermenuAbout',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => '',
                    'menu_id'         => 'footer-menu',
                    'walker'          => new understrap_WP_Bootstrap_Navwalker(),
                )
            ); ?>
        </div>

        <div class="col-md-3">
            <h4 class="footer-heading">Account</h4>
            <?php wp_nav_menu(array(
              'theme_location'        => 'top-menu',
              'container_class'       => 'footer-menu-wrapper',
              'container_id'          => 'accountMenu',
              'menu_class'            => 'navbar-nav',
              'fallback_cb'           => '',
              'menu_id'               => 'footer-menu',
              'walker'                => new understrap_WP_Bootstrap_Navwalker()
            ));?>
        </div>

        <div class="col-md-3">
          <h4 class='footer-heading'>Stay connected</h4>          
          <div class="row justify-content-left">
            <div class="col-3">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
            </div>
            <div class="col-3">
              <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
            </div>
            <div class="col-3">
              <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
            </div>
          </div>
        </div>

				<div class="col-md-3">
					<h4 class="footer-heading">Contact Us</h4>
          <address class="footer-contact contact-location">
						<i class="fa fa-map-marker fa-2x"></i>
						Swimming Complex, Satdobato, Lalitpur, <br/>
            Nepal<br/>
            Post Box No.: 11455<br/>
          </address>					
          <div class='footer-contact contact-phone mb-3'>
            <i class='fa fa-phone fa-2x'></i>
            <a href="tel:+977015202668">+977-01-5202668</a>
          </div>
					<div class="footer-contact contact-email">
						<i class="fa fa-envelope fa-2x"></i>
						<a href="mailto:nepalswimmingassociation@gmail.com">nepalswimmingassociation@gmail.com</a>
					</div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
            &copy; <?php echo date('Y'); ?> www.swimnepal.org.np All right reserved.
        </div>
      </div>
    </div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>

</html>

