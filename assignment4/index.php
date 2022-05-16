<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=products", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql1 = "CREATE TABLE test(id int);";
$sql2 = "SELECT * FROM product_info;";
$sql3 = "UPDATE product_info SET name='WATER' WHERE id=2";
$sql4 = "DELETE FROM product_info WHERE id=5";
$sql5 = "SELECT * FROM product_info INNER JOIN product_catagory ON product_info.id=product_catagory.id;";;

print_r($conn->query($sql5));
?>