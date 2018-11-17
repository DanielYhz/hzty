<?php include "includes/db.php" ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
<?php
    $query = "SELECT * FROM users_272";
    $select_product_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_product_posts)) {
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $e_mail = $row['e_mail'];
    $created_at = $row['created_at'];


    echo "<tr>";
    echo "<td>$user_id</td>";
    echo "<td>$user_name</td>";
    echo "<td>$e_mail/td>";
    echo "<td>$created_at</td>";
    echo "</tr>";
    }
?>

                     </tbody>
                     </table>


<?php
    echo "Sindy and JieHan's Company <br/>";
 $curl_handle = curl_init();
 curl_setopt($curl_handle, CURLOPT_URL, "http://sindyzhang.com/sindyList.php");
 curl_setopt($curl_handle, CURLOPT_HEADER, 0);
 curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
 $contents = curl_exec($curl_handle);
 curl_setopt($curl_handle, CURLOPT_URL, "http://www.hanhany.com/curl.php");
 $contents = $contents.",".curl_exec($curl_handle);
 echo "<br/>";
 curl_close($curl_handle);
 foreach (explode(",",$contents) as $content) {
     echo $content."<br/>";
 }
?>
