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


        //Footer Sidebards
        register_sidebar(array(
            'id' => 'first-footer-sidebar',
            'name' => 'First Footer Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));
        register_sidebar(array(
            'id' => 'second-footer-sidebar',
            'name' => 'Second Footer Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));
        register_sidebar(array(
            'id' => 'third-footer-sidebar',
            'name' => 'Third Footer Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));
        register_sidebar(array(
            'id' => 'fourth-footer-sidebar',
            'name' => 'Fourth Footer Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));
    }

    add_action('widgets_init', 'firstexample_sidebar_widgets');


?>