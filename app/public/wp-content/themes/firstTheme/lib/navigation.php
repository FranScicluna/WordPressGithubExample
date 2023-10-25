<?php

    function firstexample_register_menus(){
        register_nav_menus(array(
            "main-menu" => "Main Menu",
            "footer-menu" => "Footer Menu"
        ));
    }

    add_action("init", "firstexample_register_menus");

?>