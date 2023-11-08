<?php

show_admin_bar(false);

require_once("lib/enqueue-assets.php");
require_once("lib/navigation.php");
require_once("lib/sidebars.php");
require_once("lib/customize.php");

function firstexample_h6title($title){
    return "<h6>".$title."</h6>";
}

add_filter('the_title','firstexample_h6title');

function firstexample_excerptlength($words){
    return 15;
}

add_filter('excerpt_length', 'firstexample_excerptlength');

function firstexample_themefooter(){
    $footer_bg = get_theme_mod('firstexample_theme_footer_bg', '#FFFFFF');
    $footer_text = get_theme_mod('firstexample_theme_text', '#000000');
    echo "<div class='container-fluid' style='background-color:{$footer_bg};'>
            <div class='row'>
                <div class='col text-center' style='color: {$footer_text}'>
                    <p>Built with &copy; FirstExample</p>
                </div>
            </div>
          </div>";
}

add_action('get_footer','firstexample_themefooter');

function firstexample_postsorderasc($query){
    $query->set('order', 'ASC');
}

add_action('pre_get_posts', 'firstexample_postsorderasc');

?>