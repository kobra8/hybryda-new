<?php get_header(); ?>



<!-- Wpisy -->
	 <div class="container post-container">	

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
      <h2><?php the_title() ?></h2>
      <h6> <?php the_date(); ?> </h6>
      <?php the_content(); ?>
       
      <?php previous_post_link('%link', ''); ?>
      <?php next_post_link('%link', ''); ?> 

    <?php endwhile; ?>
<?php else : ?>
  <strong>Problem z wyświetleniem ostatnich wpisów</strong>
  <?php endif; ?>

</div>
        
                
  <?php get_footer(); ?>  