<?php

show_admin_bar(false);

require_once("lib/enqueue-assets.php");
require_once("lib/navigation.php");
require_once("lib/sidebars.php");

function firstexample_h6title($title){
    return "<h6>".$title."</h6>";
}

add_filter('the_title','firstexample_h6title');

function firstexample_excerptlength($words){
    return 15;
}

add_filter('excerpt_length', 'firstexample_excerptlength');

function firstexample_themefooter(){
    echo "<div class='container-fluid bg-light'>
            <div class='row'>
                <div class='col text-center'>
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