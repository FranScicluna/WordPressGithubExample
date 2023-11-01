<aside role="complimentary">
                <h4>Sidebar For Search</h4>

                <?php
                    if(is_active_sidebar("primary-sidebar")){
                        dynamic_sidebar("primary-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>