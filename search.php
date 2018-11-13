<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>



    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
    


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                

    
    <!--     catch the data via post          -->
               <?php
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $query = "SELECT * FROM products WHERE product_tags LIKE '%$search%'";
            $search_query = mysqli_query($connection, $query);
            
            if(!$search_query) {
                
                die("QUERY FAILED" . mysqli_error($connection));
            }
            
            $count = mysqli_num_rows($search_query);
            if ($count == 0) {
                echo "<h1> NO RESULT</h1>";
            } else {
                
    while ($row = mysqli_fetch_assoc($search_query)) {
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
        
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $product_date ?></p>
        
        <hr>
            <img class="img-responsive" src="images/<?php echo $product_image; ?>" alt="">
        <hr>
        <p><?php echo $product_description ?></p>
        
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
    <?php } 
            }
        }                                
?>
                                
            </div>

            <!-- Blog Sidebar Widgets Column -->
<?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>
        
<?php include "includes/header.php" ?>