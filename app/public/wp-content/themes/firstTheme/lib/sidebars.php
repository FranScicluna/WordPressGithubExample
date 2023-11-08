<?php

    function firstexample_sidebar_widgets(){
        register_sidebar(array(
            'id' => 'primary-sidebar',
            'name' => 'Primary Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));

        register_sidebar(array(
            'id' => 'second-sidebar',
            'name' => 'Second Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));


        // //Footer Sidebards
        // register_sidebar(array(
        //     'id' => 'first-footer-sidebar',
        //     'name' => 'First Footer Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));
        // register_sidebar(array(
        //     'id' => 'second-footer-sidebar',
        //     'name' => 'Second Footer Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));
        // register_sidebar(array(
        //     'id' => 'third-footer-sidebar',
        //     'name' => 'Third Footer Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));
        // register_sidebar(array(
        //     'id' => 'fourth-footer-sidebar',
        //     'name' => 'Fourth Footer Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));
    }

    function firstexample_footer_sidebards(){
        $footer_layout = get_theme_mod('firstexample_footer_widget_count', '2');

        for($i=0;$i<$footer_layout; $i++){
            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Sidebar '.($i+1),
                'description' => 'Footer Widget Section',
                'before_widget' => '<section id="%1$s" class="footer-widget %2$s">', //generates id
                'after_widget' => '</section>'
            ));
        }
    }
    add_action('widgets_init', 'firstexample_sidebar_widgets');
    add_action('widgets_init', 'firstexample_footer_sidebards');


?>