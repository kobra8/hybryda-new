<?php

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'hybryda2017' ),
) );
//add_action( 'init', 'register_nav_menus' );

function hybryda2017_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri()."/styles/bootstrap.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
   // załaduj biblioteki jQuery
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '',  true );	
    // załaduj skrypt js bootstrapa
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '',  true );
   // załaduj skrypt js galerii imgLiquid
    wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.js', array( 'jquery' ), '',  true );
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

 /* This function gets images from media library */

//   function get_media_library_images() {
//
//    $ml_images = new WP_Query( array(
//        'page_id' => 19,
//        'post_type' => 'attachment',
//        'post_mime_type' =>'image',
//        'post_status' => 'inherit',
////        'posts_per_page' => 10,
//        'orderby' => 'desc'
//    ));
//    $my_images = array();
//    foreach ( $ml_images->posts as $image) {
//        $my_images[]= array('url'=>$image->guid,'title'=>$image->post_title);		
//    }
//    return $my_images;
//}
//
//function display_media_library_images() {
//	$imgblock = "";
//	foreach($images = get_media_library_images() as $singleimage) {		
//		$imgblock .= '<div class=""><a href="'.$singleimage["url"].'" data-lightbox-type="ajax" data-lightbox-gallery="gallery1" class="lightbox"><img class="" src="'.$singleimage["url"].'" alt="" title="'.$singleimage["title"].'" /></a></div>';		
//	}
//return $imgblock;
//}

 /* This function gets images from page by page ID */

function get_page_images() {
 $images = get_children( array( 'post_parent' => 19, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) ); 
/* $images is now a object that contains all images (related to post id 19) and their information ordered like the gallery interface. */
        if ( $images ) { 

                //looping through the images
                foreach ( $images as $attachment_id => $attachment ) {
                ?>

                            <a class="lightbox" href="<?php echo get_attachment_link( $attachment_id );  ?> ">
                            <?php echo wp_get_attachment_image( $attachment_id, 'medium' ); ?>
                            </a>   
                <?php
                }
        }
    }
?>
