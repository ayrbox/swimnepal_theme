<?php
/**
 * Template Name: Front Page
 *
 * Inspired by OnePress frontpage structure
 */
get_header();
  $sections = array(
    "blogs",
    "policy",
  );
?>

<?php get_template_part('global-templates/hero', 'none'); ?>

<div class="wrapper-section" id="wrapper-index">
  <?php
  foreach ($sections as $section) {
      get_template_part("section-templates/section", $section);
  }
  ?>
</div>
 <?php get_footer(); ?>