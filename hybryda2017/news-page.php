<?php 
/*
Template name: News
*/

get_header(); ?>

  <div class="container post-container">
   
    <?php $the_query = new WP_Query(array(
			  'posts_per_page' => 5
			  ));
		?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

		<h2><?php the_title() ?></h2>
        <h6> <?php the_date(); ?> </h6>
        <?php the_content(); ?>
    
        <?php previous_post_link(''); ?>
        <?php next_post_link(''); ?> 
    
      <?php endwhile; ?>	

  </div>
  
<?php get_footer(); ?>