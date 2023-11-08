<?php

    function firstexample_customize_register($wp_customize){
        $wp_customize -> /*arrow notation, to call a function of wp_customize*/ add_section('firstexample_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        )); 

        $wp_customize -> add_setting('firstexample_footer_bg', array(
            'default' => 'dark',
            'sanitize_callback' => 'sanitize_text_field' /*A callback is what is going to happen after the function runs, makes sure that everything runs safe*/
        ));

        $wp_customize -> add_control('firstexample_footer_bg', array(
            'type' => 'select',
            'label' => 'Background Colour',
            'choices' => array(
                'light' => 'Light',
                'dark' => 'Dark',
            ),
            'section'=>'firstexample_footer_options'
        ));


        //Background Colour
        $wp_customize -> add_setting('firstexample_theme_footer_bg', array(
            'default' => '#FFFFFF',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'firstexample_theme_footer_bg', array(
                'label' => 'Choose Theme Footer Background Color',
                'section' => 'firstexample_footer_options',
                'settings' => 'firstexample_theme_footer_bg'

            ))
        );


        //Text
        $wp_customize -> add_setting('firstexample_theme_text', array(
            'default' => '#000000',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'firstexample_theme_text', array(
                'label' => 'Choose Theme Footer Text Color',
                'section' => 'firstexample_footer_options',
                'settings' => 'firstexample_theme_text'

            ))
        );


        $wp_customize -> add_setting('firstexample_footer_widget_count', array(
            'default' => '2',
            'sanitize_callback' => 'sanitize_text_field' /*A callback is what is going to happen after the function runs, makes sure that everything runs safe*/

        ));

        $wp_customize -> add_control('firstexample_footer_widget_count', array(
            'type' => 'select',
            'label' => 'Footer Widget Count',
            'choices' => array(
                '1' => '1 Widget',
                '2' => '2 Widgets',
                '3' => '3 Widgets',
                '4' => '4 Widgets',
            ),
            'section' => 'firstexample_footer_options'

        ));
    }   
    
    add_action('customize_register','firstexample_customize_register');

?>