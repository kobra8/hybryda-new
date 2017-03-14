<?php

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'hybryda2017' ),
) );
//add_action( 'init', 'register_nav_menus' );

function hybryda2017_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri()."/styles/bootstrap.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri()."/styles/nivo-lightbox.css" );
    wp_enqueue_style( 'default', get_template_directory_uri()."/styles/themes/default/default.css" );
   // załaduj biblioteki jQuery
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), '',  true );	
    // załaduj skrypt js bootstrapa
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '',  true );
   // załaduj skrypt js nivo-lightbox
    wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.js', array( 'jquery' ), '',  true );
    wp_enqueue_script( 'lightbox-init', get_template_directory_uri() . '/js/lightbox-init.js', array( 'jquery' ), '',  true ); 
}

add_action( 'wp_enqueue_scripts', 'hybryda2017_scripts' );


add_theme_support('post-thumbnails');

function phone_customizer( $wp_customize ) {
	
    $wp_customize->add_section( 'phone_section_one', array(
     'title'       => __( 'Telefon kontaktowy', 'hybryda2017' ),
     'description' => __( 'Tutaj można zmienić telefon wyświetlany w nagłówku.', 'hybyda2017' ),
     'priority'    => 30,
      )
    );
	
    $wp_customize->add_setting(
     'phone_number', array(
     'default' => __( '+14 6272282', 'hybryda2017' ),
      )
    );
	
    $wp_customize->add_control(
     'phone_number', array(
     'label'    => __( 'Domyslny numer telefonu', 'hybryda2017' ),
     'section' => 'phone_section_one',
     'type' => 'text',
      )
    );

}
add_action( 'customize_register', 'phone_customizer' );

function email_customizer( $wp_customize ) {
	
    $wp_customize->add_section( 'email_section_one', array(
     'title'       => __( 'Adres e-mail', 'hybryda2017' ),
     'description' => __( 'Tutaj można zmienić adres e-mail wyświetlany w nagłówku.', 'hybryda2017' ),
     'priority'    => 60,
      )
    );
	
    $wp_customize->add_setting(
     'email_address', array(
     'default' => __( 'hybryda22@wp.pl', 'hybryda2017' ),
      )
    );
	
    $wp_customize->add_control(
     'email_address', array(
     'label'    => __( 'Domyślny adres e-mail', 'hybryda2017' ),
     'section' => 'email_section_one',
     'type' => 'text',
      )
    );

}
add_action( 'customize_register', 'email_customizer' );

// Custom styles in next/prev post links

add_filter('next_post_link', 'post_link_attributes_next');
add_filter('previous_post_link', 'post_link_attributes_prev');

function post_link_attributes_prev($output) {
    $injection = 'title="Starsza wiadomość" class="post-left glyphicon glyphicon-chevron-left" aria-hidden="true"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function post_link_attributes_next($output) {
    $injection = 'title="Nowsza wiadomość" class="post-right glyphicon glyphicon-chevron-right" aria-hidden="true"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

 /* This function gets images from page by page ID */

function get_page_images() {
 $images = get_children( array( 'post_parent' => 19, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'title', 'order' => 'ASC', 'numberposts' => 99 ) ); 
/* $images is now a object that contains all images (related to post id 19) and their information ordered like the gallery interface. */
        if ( $images ) { 

        //looping through the images
          foreach ( $images as $attachment_id => $attachment ) {
            
              echo '<a href="' . wp_get_attachment_image_src( $attachment_id,'full' )[0] . '" data-lightbox-gallery="gallery1" >';       
              echo wp_get_attachment_image( $attachment_id, 'thumbnail', '', array("class" => "img-thumbnail") ); 
              echo '</a>';  
    
        }
      }
    }
?>