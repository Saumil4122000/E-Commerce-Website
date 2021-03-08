<?php
session_start();
if (isset($_POST['login'])) {
    include("partial/connect.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from  customer where username='$email' and password='$password'";
    $result=$connect->query($sql);
   $final=$result->fetch_assoc();


$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];
$_SESSION['c_id']=$final['id'];
    if($email==$final['username'] and $password==$final['password']){
        echo "<script>
        alert('correct credentials😊😊');
        window.location.href='index.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Wrong credentials😒😒');
        window.location.href='c_form.php';
        </script>";
    }
}
?>