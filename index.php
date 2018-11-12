<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

   <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <?php
                
         $query = "SELECT * FROM products";
         $select_all_products_query = mysqli_query($connection, $query);                    
        
        while ($row = mysqli_fetch_assoc($select_all_products_query)) {
            $product_area = $row['product_area'];
            $product_post_author = $row['product_post_author'];
            $product_date = $row['product_date'];
            $product_image = $row['product_image'];
            $product_description = $row['product_description'];
            
            ?>
            
                <h1 class="page-header">
                    The Housing Zenith Talented Yard
                    <small>Post Your House</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $product_area ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $product_post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $product_date ?> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $product_image; ?>" alt="">
                <hr>
                <p><?php echo $product_description ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>            
   
  <?php } ?>
                


                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            
            <?php include "includes/sidebar.php"; ?>
            
 

        </div>
        <!-- /.row -->

        <hr>

   <?php include "includes/footer.php"; ?>
