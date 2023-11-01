<aside role="complimentary">
                <h4>Sidebar For Search</h4>

                <?php
                    if(is_active_sidebar("second-sidebar")){
                        dynamic_sidebar("second-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>