<aside role="complimentary">
                <?php
                    if(is_active_sidebar("first-footer-sidebar")){
                        dynamic_sidebar("first-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>