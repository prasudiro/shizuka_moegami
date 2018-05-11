<?php get_header(); ?>
<?php 
/* Template Name: iM@S List Song */

if (have_posts()) :
  while (have_posts()) :
    the_post();
  echo the_content();
  endwhile;
endif;
?>

<?php get_footer(); ?>