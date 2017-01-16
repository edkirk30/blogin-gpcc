<?php
$wp_customize->add_panel(
  'styling',
  array(
    'title' => __( 'Styling', 'blogim' ),
    'description' => __('styling options', 'blogim'),
    'priority' => 31, 
  )
);

//Doesn't create sections
$wp_customize->get_section('background_image')->panel = 'styling';
$wp_customize->get_section('header_image')->panel = 'styling';
$wp_customize->get_section('colors')->panel = 'styling';
$wp_customize->get_setting('background_color')->default = '#FCFFF5';

//Headline image
//Logo image                                                                                               
$wp_customize->add_section( 'headline_image_section' , array(              
    'title'       => __( 'Headline Image', 'blogim' ),                           
     'priority'    => 30,                                                                                   
      'description' => __('Upload a logo.','blogim'),) ); 

$wp_customize->add_setting('headline_image', array(                     
       'sanitize_callback' => 'esc_url_raw') );                                                               
                                                                                                          
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'headline_image', array(
        'label'    => __( 'Headline image (homepage)', 'blogim' ),                         
             'section'  => 'headline_image_section',                                                               
              'settings' => 'headline_image',                                                                     
           )));     

$wp_customize->get_section('headline_image_section')->panel = 'styling';  

//Main color
$wp_customize->add_setting(
  'blogim_main_color',
  array(
    'default' => '#193441',
    'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
  )
);
$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'blogim_main_color',
    array(
      'label'      => __('Main Color', 'blogim'),
      'section' => 'colors',
      'settings' => 'blogim_main_color',
    )
  )
);
