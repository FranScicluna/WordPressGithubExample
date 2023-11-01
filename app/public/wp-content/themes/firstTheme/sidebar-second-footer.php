<aside role="complimentary">
                <?php
                    if(is_active_sidebar("second-footer-sidebar")){
                        dynamic_sidebar("second-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>