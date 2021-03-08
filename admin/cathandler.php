<?php
include("../partial/connect.php");
$category=$_POST['cate'];
$sql="INSERT INTO categories(name) VALUES('$category')";


$result=mysqli_query($connect,$sql);
header('location: productsshow.php');

mysqli_close($connect);
?>