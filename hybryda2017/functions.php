<?php

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'hybryda2017' ),
) );
//add_action( 'init', 'register_nav_menus' );



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

?>
