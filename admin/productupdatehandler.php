<?php 
include("../partial/connect.php");
if(isset($_POST['update'])){
    include("../partial/connect.php");
    $newid=$_POST['form_id'];
    $newname=$_POST['name1'];
    $newprice=$_POST['price1'];
    $newdescription=$_POST['description1'];
    $newcategory=$_POST['category1'];
//     $Imagename=$_FILES['file1']['name'];
// $fileelementname='file';
// $path='C:/Users/BAPS/Desktop/Uploads';
// $location=$path.$_FILES['file1']['name'];
// move_uploaded_file($_FILES['file1']['tmp_name'],$location);
    
    $target="uploads/";
    $file_path=$target.basename($_FILES['file1']['name']);
    $file_name=$_FILES['file1']['name'];
    //tmp name is used to copy the actual file name which is stored in db as the tmp name where the image is stored after upload
    $file_tmp=$_FILES['file1']['tmp_name'];
    $file_store="uploads/".$file_name;
    
    move_uploaded_file($file_tmp,$file_store);
        $sql="UPDATE products set name='$newname' , price='$newprice' , description='$newdescription' ,
                category_id='$newcategory', picture='$file_path' where id='$newid' ";
                if(mysqli_query($connect,$sql)){
                    header('location : productsshow.php');
                }
                
}

?>