<?php


include("../partial/connect.php");
$email=$_POST['email'];
 $password=$_POST['password'];
 $password2=$_POST['password2'];


if($password==$password2){
    $sql="INSERT INTO customer(username,password) values('$email','$password')";
    $connect->query($sql);
    echo "<script>
    alert('Password match');
    window.location.href='../cart.php';
    </script>";

}
else{
    echo "<script>
    alert('Password did not match');
    window.location.href='../c_form.php';
    </script>";
}
mysqli_close($connect);
?>