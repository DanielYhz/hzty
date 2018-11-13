<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>



    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
    


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <?php
    $query = "SELECT * FROM products";
    $select_all_products_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_products_query)) {
        // comes out an assosiated array. 
        $product_area = $row['product_area'];
        $product_post_author= $row['product_post_author'];
        $product_date = $row['product_date'];
        $product_image = $row['product_image'];
        $product_description = $row['product_description'];
        ?>
        <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
        </h1>

        <!-- First Blog Post -->
        <h2>
        <a href="#"><?php echo $product_area ?></a>
        
        </h2>
        <p class="lead">
        by <a href="index.php"><?php echo $product_post_author ?></a>
        </p>
        
        <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
        
        <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p><?php echo $product_description ?></p>
        
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
    <?php } ?>
                
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
<?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>
        
<?php include "includes/header.php" ?>