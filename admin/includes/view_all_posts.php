                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Post Author</th>
                                <th>Area</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Tags</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                     <tbody>

<?php
    $query = "SELECT * FROM products";
    $select_product_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_product_posts)) {
    $product_id = $row['product_id'];
    $product_post_author = $row['product_post_author'];
    $product_area = $row['product_area'];
    $product_category_id = $row['product_category_id'];
    $product_status = $row['product_status'];
    $product_image = $row['product_image'];
    $product_tags = $row['product_tags'];
    $product_date = $row['product_date'];
    $product_description = $row['product_description'];
    $product_comment_count = $row['product_comment_count'];

    echo "<tr>";
    echo "<td>$product_id</td>";
    echo "<td>$product_post_author</td>";
    echo "<td>$product_area</td>";
    echo "<td>$product_category_id</td>";
    echo "<td>$product_status</td>";
    echo "<td><img width='100' src='../images/$product_image' alt='image_loading'></td>";
    echo "<td>$product_tags</td>";
    echo "<td>$product_description</td>";
    echo "<td>$product_date</td>";
    echo "<td><a href='posts.php?source=edit_post&p_id={$product_id}'>Edit</a></td>";
    echo "<td><a href='posts.php?delete={$product_id}'>Delete</a></td>";
    echo "</tr>";
    }

?>

                     </tbody>
                     </table>

<?php
if(isset($_GET['delete'])){
    $the_product_id = $_GET['delete'];
    $query = "DELETE FROM products WHERE product_id={$the_product_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: posts.php");
}

?>
