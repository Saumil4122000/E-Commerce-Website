<?php
include("../partial/connect.php");
$name=$_POST['name1'];
$price=$_POST['price1'];
$description=$_POST['description1'];
$category=$_POST['category1'];

// $file_name=$_FILES['file1']['name'];
// $fileelementname='file';
// $path='C:/Users/BAPS/Desktop/Uploads/';
// $location=$path.$file_name;
// move_uploaded_file($_FILES['file1']['tmp_name'],$location);


$target="uploads/";
$file_path=$target.basename($_FILES['file1']['name']);
$file_name=$_FILES['file1']['name'];
//tmp name is used to copy the actual file name which is stored in db as the tmp name where the image is stored after upload
$file_tmp=$_FILES['file1']['tmp_name'];

$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);
$sql="INSERT INTO products(name,price,picture,description,category_id) VALUES('$name','$price','$file_path','$description','$category')";

$result=mysqli_query($connect,$sql);
header('location: productsshow.php');

mysqli_close($connect);
?>