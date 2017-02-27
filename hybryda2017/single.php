<?php get_header(); ?>

<div class="container">

<!-- Wpisy -->
		
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
      <h2><?php the_title() ?></h2>
      <?php the_content(); ?>
  <div class="navigation"><p>Uwaga:<?php posts_nav_link('&#8734;','&laquo;&laquo; Go Forward 
In Time','Go Back in Time &raquo;&raquo;'); ?></p></div>
    <?php endwhile; ?>
<?php else : ?>
  <strong>Problem z wyświetleniem ostatnich wpisów</strong>
  <?php endif; ?>
 
  <!--
   <div class="navigation"><p><?php posts_nav_link(); ?></p></div>    
   <!-- Left and right controls -->
    <a class="left carousel-control" role="button" data-slide="prev" href="#" >
       </a>  
      <?php previous_post_link('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>  <span class="sr-only">Previous</span>'); ?>"
 
    <a class="right carousel-control" role="button" data-slide="next" href="#" >
      <?php next_post_link('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>'); ?>
    </a>
 
</div>
        
                
  <?php get_footer(); ?>  