<?php 
/**
 * @Packge     : Lawyer
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'lawyer_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'lawyer' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    // array(
    //     'id'   => 'lawyer_general_section',
    //     'args' => array(
    //         'title'    => esc_html__( 'General', 'lawyer' ),
    //         'panel'    => 'lawyer_theme_options_panel',
    //         'priority' => 1,
    //     ),
    // ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'lawyer_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'lawyer_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'lawyer_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'lawyer_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'lawyer_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'lawyer_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'lawyer_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'lawyer' ),
            'panel'    => 'lawyer_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>