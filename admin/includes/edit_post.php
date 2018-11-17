<?php
    if(isset($_GET['p_id'])) {
        $the_product_id = $_GET['p_id'];
    }
    $query = "SELECT * FROM products WHERE product_id = $the_product_id";
    $select_posts_by_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $product_id = $row['product_id'];
    $product_post_author = $row['product_post_author'];
    $product_area = $row['product_area'];
    $product_category_id = $row['product_category_id'];
    $product_status = $row['product_status'];
    $product_image = $row['product_image'];
    $product_tags = $row['product_tags'];
    $product_description = $row['product_description'];
    $product_comment_count = $row['product_comment_count'];
    }

    if (isset($_POST['update_product'])) {
        $product_post_author = $_POST['product_post_author'];
        $product_area = $_POST['product_area'];
        $product_categories_id = $_POST['product_category'];
        $product_status = $_POST['product_status'];
        $product_image = $_FILES['image']['name'];
        $product_image_temp = $_FILES['image']['tmp_name'];
        $product_description = $_POST['product_description'];
        $product_tags = $_POST['product_tags'];

        move_uploaded_file($product_image_temp,"../images/$product_image");
        echo $product_image;

        if (empty($product_image)) {
            $query = "SELECT * FROM products WHERE product_id = $the_product_id";
            $select_image = mysqli_query($connectioin,$query);

            while($row = mysqli_fetch_array($select_image)) {
                $product_image = $row['image'];
            }
        }

        $query = "UPDATE products SET ";
        $query .= "product_area = '{$product_area}', ";
        $query .= "product_category_id = '{$product_category_id}', ";
        $query .= "product_date = now(), ";
        $query .= "product_post_author = '{$product_post_author}', ";
        $query .= "product_status = '{$product_status}', ";
        $query .= "product_tags = '{$product_tags}', ";
        $query .= "product_description = '{$product_description}', ";
        $query .= "product_image = '{$product_image}' ";
        $query .= "WHERE product_id = {$the_product_id} ";

        $update_product = mysqli_query($connection,$query);
        confirmQuery($update_product);
    }
?>




    <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_area">Product Area</label>
        <input value="<?php echo $product_area; ?>" type="text" class="form-control" name="product_area">
    </div>

    <div class="form-group">
       <select name="product_category" id="">
           <?php
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    confirmQuery($select_categories);

    while ($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
        echo "<option value='{$cat_id}'>{$cat_title}</option>";
    }
           ?>
       </select>
    </div>

     <div class="form-group">
        <label for="product_post_author">Product Post Author</label>
        <input value="<?php echo $product_post_author; ?>" type="text" class = "form-control" name="product_post_author">
    </div>

     <div class="form-group">
        <label for="product_status">Product Status</label>
        <input value="<?php echo $product_status; ?>" type="text" class = "form-control" name="product_status">
    </div>

     <div class="form-group">
        <img width="100" src="../images/<?php echo $product_image; ?>" alt="">
        <input type="file" name="image">
    </div>

     <div class="form-group">
        <label for="product_tags">Product Tags</label>
        <input value="<?php echo $product_tags; ?>" type="text" class = "form-control" name="product_tags">
    </div>

     <div class="form-group">
        <label for="product_description">Product Description</label>
        <textarea class="form-control " name="product_description" id="" cols="30" rows="10">
        <?php echo $product_description; ?>
        </textarea>
    </div>

     <div class="form-group">
         <input class="btn btn-primary" type="submit" name="update_product" value="Publish Post">
     </div>
</form>
