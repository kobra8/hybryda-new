<?php 
/*
Template name: Szablon galerii
*/

get_header(); ?>
  <div class="container">
    <h2><?php the_title() ?></h2>
    <div>
      <?php echo get_page_images(); ?>
    </div>
  <br><br>
  </div>

<?php get_footer(); ?>