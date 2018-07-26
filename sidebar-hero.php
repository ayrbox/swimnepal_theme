<?php
/**
 * Sidebar - hero setup.
 *
 * @package understrap
 */

?>

<?php if (is_active_sidebar('hero')) : ?>
	


	<div id="mainCarousel" class="carousel slide page-carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mainCarousel" data-slide-to="1"></li>
			<li data-target="#mainCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<?php dynamic_sidebar('hero'); ?>
		</div>
		<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<script>
		jQuery( ".carousel-item" ).first().addClass( "active" );
	</script>
<?php endif; ?>
