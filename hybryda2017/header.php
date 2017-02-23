<!DOCTYPE html>
<html>
	<head>
		<title><?php echo(bloginfo('name')) . ' '; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo(bloginfo('stylesheet_url')); ?>">
        <link rel="stylesheet" href="<?php echo(bloginfo(template_directory).'/styles/bootstrap.css'); ?>">
    <?php wp_head(); ?>
	</head>
	<body>

    	<header>
		  <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a href="<?php echo get_settings('home'); ?>/">
                <img class="logo imgmenu" src="<?php echo(bloginfo(template_directory).'/images/logo_hyb_biale.png'); ?>">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
      
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="#">Aktualności</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O nas<span class="caret">          </span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Zrealizowane projekty</a></li>
                        <li><a href="#">Gwarancja jakości</a></li>
                        <li><a href="#">Kadra</a></li>
                        <li><a href="#">Nasi klienci o Nas</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Egzaminy TELC</a></li>
                  <li><a href="#">Galeria</a></li> 
                  <li><a href="#">Kontakt</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo get_settings('home').'/wp-admin'; ?>/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
                <ul  class="contact-details">
                            	<li><a  href="#"><i></i><?php echo get_theme_mod( 'phone_number' ); ?></a></li>
                                <li><a  href="#"><i></i> <?php echo get_theme_mod( 'email_address' ); ?></a></li>
                            </ul>
                
              </div>
            </div>
          </nav>    
		</header>

				<!-- Nav -->
     
<!--
					<nav id="nav">
                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						
					</nav>
-->
