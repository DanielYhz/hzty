            <div class="col-md-4">
                                             
                <!-- Product Post Search Well -->
                
<!-- need a form to submit some data to the database.  -->
                <div class="well">
                    <h4>Product Post Search</h4>
                    <form action="search.php" method = "post">
                    <div class="input-group">
                        <input name ="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name = "submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div> 
               
                <!-- Product Post Categories Well -->
                <div class="well">
                   
                   <?php
    $query = "SELECT * FROM categories";
    $select_all_categories_sidebar  = mysqli_query($connection, $query);                    

                   ?>
                   
                   
                    <h4>Product Post Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
    <?php                            
    while ($row = mysqli_fetch_assoc($select_all_categories_sidebar)) {
        $cat_title = $row['cat_title'];
        
        echo "<li><a href = '#'>{$cat_title}</a></li>";
    }                                
    ?>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
<?php include "widget.php"; ?>

            </div>