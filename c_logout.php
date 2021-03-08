<?php
session_start();
session_destroy();
header('location: c_form.php');
?>
