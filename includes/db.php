<?php
$db['db_host'] = "127.0.0.1";
$dbport =
$db['db_user'] = "root";
$db['db_pass'] = "kaze";
$db['db_name'] = "hzty";

foreach($db as $key => $value) {
    define (strtoupper($key),$value);
}
    
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//if ($connection) {
//    echo "We are connected";
//}
?>

<?php
//$dbhost = $_SERVER['kazedb.c660awpuly90.us-west-1.rds.amazonaws.com'];
//$dbport = $_SERVER['3306'];
//$dbname = $_SERVER['kaze'];
//$charset = 'utf8' ;
//
//$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
//$username = $_SERVER['kaze'];
//$password = $_SERVER['kaze'];
//
//$pdo = new PDO($dsn, $username, $password);

//$connection = mysqli_connect($_SERVER['kazedb.c660awpuly90.us-west-1.rds.amazonaws.com'], $_SERVER['ubuntu'], $_SERVER['kaze'], $_SERVER['hzty'], $_SERVER['3306']);

?>





































