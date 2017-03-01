<?php get_header(); ?>



<!-- Wpisy -->
	 <div class="container">	

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
      <h2><?php the_title() ?></h2>
      <h6> <?php the_date(); ?> </h6>
      <?php the_content(); ?>
    

        <?php previous_post_link() ?>
        <?php next_post_link() ?>
      <?php the_post_navigation(); ?>
       <?php previous_post_link('Previous post: %link', 'Poprzedni'); ?> &bull; 
<?php next_post_link('Next post: %link', '[ %title ]'); ?>
      

    <?php endwhile; ?>
<?php else : ?>
  <strong>Problem z wyświetleniem ostatnich wpisów</strong>
  <?php endif; ?>



  
   <!-- Left and right controls 
    <a class="left carousel-control" role="button" data-slide="prev" href="#" >
       </a>  
      
 
    <a class="right carousel-control" role="button" data-slide="next" href="#" >
      <?php next_post_link('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>'); ?>
    </a>
 -->
</div>
        
                
  <?php get_footer(); ?>  