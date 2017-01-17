<html>
	<head>
		<title><?php echo(bloginfo('name')) . ' '; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo(bloginfo('stylesheet_url')); ?>">
        <link rel="stylesheet" href="<?php echo(bloginfo(template_directory).'/css/bootstrap.css'); ?>">
    <?php wp_head(); ?>
	</head>
	<body>

    	<header id="header" class="alt">
		      <span class="logo">
                <?php the_custom_logo(); ?></span>
						<h1><?php bloginfo("name"); ?></h1>
						<p><?php bloginfo("description"); ?><br />
						built by Kobra</p>
					</header>

				<!-- Nav -->
     
					<nav id="nav">
                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						
					</nav>