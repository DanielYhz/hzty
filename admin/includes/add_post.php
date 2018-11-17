<?php
  if(isset($_POST['create_post']))  {
      $product_area = $_POST['product_area'];
      $product_post_author = $_POST['product_post_author'];
      $product_category_id = $_POST['product_category_id'];
      $product_status = $_POST['product_status'];

      $product_image = $_FILES['image']['name'];
      $product_image_temp = $_FILES["image"]["tmp_name"];
      $product_tags = $_POST['product_tags'];
      $product_description = $_POST['product_description'];
      $product_date = date('d-m-y');
      $product_comment_count = 4;

      $query = "INSERT INTO products(product_category_id, product_area, product_post_author,product_date,
      product_image,product_description,product_tags,product_comment_count,product_status) ";

      $query .= "VALUES({$product_category_id},'{$product_area}','{$product_post_author}',now(),'{$product_image}',
      '{$product_description}','{$product_tags}',{$product_comment_count},'{$product_status}' ) ";

      $create_post_query = mysqli_query($connection, $query);

      confirmQuery($create_post_query);

  }
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_area">Product Area</label>
        <input type="text" class="form-control" name="product_area">
    </div>

    <div class="form-group">
        <label for="product_category_id">Product Category Id</label>
        <input type="text" class = "form-control" name="product_category_id">
    </div>
    '
     <div class="form-group">
        <label for="product_post_author">Product Author</label>
        <input type="text" class = "form-control" name="product_post_author">
    </div>

     <div class="form-group">
        <label for="product_status">Product Status</label>
        <input type="text" class = "form-control" name="product_status">
    </div>

     <div class="form-group">
        <label for="product_image">Product Image</label>
        <input type="file" name="image">
    </div>

     <div class="form-group">
        <label for="product_tags">Product Tags</label>
        <input type="text" class = "form-control" name="product_tags">
    </div>

     <div class="form-group">
        <label for="product_description">Product Description</label>
        <textarea class="form-control " name="product_description" id="" cols="30" rows="10"></textarea>
    </div>

     <div class="form-group">
         <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
     </div>
</form>
