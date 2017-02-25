<?php
/*
Template name: Strona główna
*/
 get_header(); ?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

        <!-- Wrapper for slides WP post loop -->

  <div class="carousel-inner" role="listbox"> 
    
		<?php $the_query = new WP_Query(array(
			  'posts_per_page' => 1
			  ));
		?>
    		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div  class="item active">
				<h4><?php the_title(); ?></h4>
				<span><?php the_content(); ?></span>
<!--             <span> 
/* <?php echo get_slider_excerpt(); ?>*/ 
</span> -->
              <a  href="<?php the_permalink() ?>">Czytaj więcej</a>
				</div>
		<?php endwhile; ?>	
		
    
    <?php $the_query = new WP_Query(array(
			  'posts_per_page' => 4
			  ));
		?>
    		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div  class="item">
				<h4><?php the_title(); ?></h4>
				<span><?php the_content(); ?></span>
              <a  href="<?php the_permalink() ?>">Czytaj więcej</a>
				</div>
		<?php endwhile; ?>	
	</div>
    
<!--
<script>
    function changeclass() {

var NAME = document.getElementById("myCarousel")

NAME.className="carousel slide"

}
 
 </script>   
    
<button type="button"onclick="changeclass();">ZMIEN KLASE</button>
-->
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
 <br>
  <div class="row">
    <div class="col-sm-4">
      <a href="<?php echo get_settings('home').'/?page_id=2396'; ?>">
        <img class="imgmenu"src="<?php echo(bloginfo(template_directory).'/images/oferta.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
        <p>Oferta szkoleniowa</p>
      </a>
    </div>
    <div class="col-sm-4"> 
      <a href="<?php echo get_settings('home').'/?page_id=789'; ?>">
        <img class="imgmenu" src="<?php echo(bloginfo(template_directory).'/images/sale.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
        <p>Sale szkoleniowe</p> 
      </a>
    </div>
      <div class="col-sm-4">
        <a href="<?php echo get_settings('home').'/?page_id=2381'; ?>">
          <img class="imgmenu" src="<?php echo(bloginfo(template_directory).'/images/projekty.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
          <p>Realizowane projekty</p>
        </a>
    </div>
  </div>

    
</div><br>



<?php get_footer(); ?>