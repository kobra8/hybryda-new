<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support('post-thumbnails');
add_theme_support('custom-logo', ['height' => 150, 'width' => 150]);

function register_my_widget(){
  register_sidebar(array(
      'name' => 'Widget w stopce',
      'id'  => 'footer_1',
      'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' =>'<h2>',
    'after_title' =>'</h2>'
  ));
  register_sidebar(array(
      'name' => 'Widget w stopce z prawej',
      'id'  => 'footer_2',
      'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' =>'<h2>',
    'after_title' =>'</h2>'
  ));
}

add_action('widgets_init','register_my_widget');

function phone_customizer( $wp_customize ) {
	
    $wp_customize->add_section( ‚phone_section_one’, array(
     ‚title’       => __( ‚Contact Phone Details’, ‚WPtuts’ ),
     ‚description’ => __( ‚This is a settings section to change the phone contact details in the header.’, ‚WPTuts’ ),
     ‚priority’    => 30,
      )
    );
	
    $wp_customize->add_setting(
     ‚phone_number’, array(
     ‚default’ => __( ‚14 6272282’, ‚WPtuts’ ),
     ‚sanitize_callback’ => ‚WPtuts_sanitize_text’,
      )
    );
	
    $wp_customize->add_control(
     ‚phone_number’, array(
     ‚label’    => __( ‚Default Phone Number’, ‚WPtuts’ ),
     ‚section’ => ‚phone_section_one’,
     ‚type’ => ‚text’,
      )
    );

}
add_action( ‚customize_register’, ‚phone_customizer’ );

function email_customizer( $wp_customize ) {
	
    $wp_customize->add_section( ’email_section_one’, array(
     ‚title’       => __( ‚Email Contact Details’, ‚WPtuts’ ),
     ‚description’ => __( ‚This is a settings section to change the e-mail contact details in the header.’, ‚WPTuts’ ),
     ‚priority’    => 60,
      )
    );
	
    $wp_customize->add_setting(
     ’email_address’, array(
     ‚default’ => __( ‚hybryda22@wp.pl’, ‚WPtuts’ ),
     ‚sanitize_callback’ => ‚WPtuts_sanitize_text’,
      )
    );
	
    $wp_customize->add_control(
     ’email_address’, array(
     ‚label’    => __( ‚Default Email Address’, ‚WPtuts’ ),
     ‚section’ => ’email_section_one’,
     ‚type’ => ‚text’,
      )
    );

}
add_action( ‚customize_register’, ’email_customizer’ );

?>
