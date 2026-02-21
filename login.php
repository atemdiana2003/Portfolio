<?php

$user = "admin";
$pass = "1234";

if($_POST['user']==$user && $_POST['pass']==$pass){

session_start();
$_SESSION['admin']=true;

header("Location: admin.php");

}else{

echo "Wrong Login";

}

?>