<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>

<? if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="container-slim pad-top pad-bottom pad-sides">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </section>
  <?php endwhile; else : ?>
  <h6 class="center">Not Found</h6>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

<?php get_footer(); ?>
