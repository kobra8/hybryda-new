<!DOCTYPE html>
<html>
	<head>
		<title><?php echo(bloginfo('name')) . ' '; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	
    <?php wp_head(); ?>
	</head>
	<body>

    	<header>
		  <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header center-content">
                <a href="<?php echo get_settings('home'); ?>/">
                <img class="logo imgmenu" src="<?php echo(bloginfo(template_directory).'/images/logo_hyb_biale.png'); ?>">
                </a>
<!--  Hamburger menu -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <br>
                <ul  class="navbar-nav contact-details">
                  <li><a  href="#"><i><?php echo get_theme_mod( 'phone_number' ); ?></i>&nbsp; |</a></li>
                  <li><a  href="#"><i>&nbsp; <?php echo get_theme_mod( 'email_address' ); ?></i></a></li>
                </ul>
              </div>
             
              
              <!-- Menu wordpresowe z wp-bootstrap-navwalker  -->
               
                <?php
                      wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'myNavbar',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                  ?>
                          
            </div>
          </nav>    
		</header>
