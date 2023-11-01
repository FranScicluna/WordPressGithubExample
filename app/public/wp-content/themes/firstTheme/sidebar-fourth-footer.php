<aside role="complimentary">
                <?php
                    if(is_active_sidebar("fourth-footer-sidebar")){
                        dynamic_sidebar("fourth-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>