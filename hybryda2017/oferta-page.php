<?php 
/*
Template name: Oferta szkoleniowa
*/

get_header(); ?>

  <div class="container post-container">
   <h5>Oferta szkoleniowa</h5>
    <?php 
    
   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    
    $the_query = new WP_Query(array(
              'category_name' => 'oferta-szkoleniowa',
			  'posts_per_page' => 5,
              'paged' => $paged
			  ));
		?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

		<h2><?php the_title() ?></h2>
        <h6> <?php the_date(); ?> </h6>
        <?php the_content(); ?>
        <hr class="posthr">
      <?php endwhile; ?>
    
    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
    <?php echo get_next_posts_link( '<span title="Poprzednia strona" class="post-left glyphicon glyphicon-chevron-left" aria-hidden="true">', $the_query->max_num_pages ); // display older posts link ?>
    <?php echo get_previous_posts_link( '<span title="Następna strona" class="post-right glyphicon glyphicon-chevron-right" aria-hidden="true">' ); // display newer posts link ?>
    <?php } ?>

  </div>

<?php get_footer(); ?>