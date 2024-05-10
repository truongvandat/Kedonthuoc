<?php 
$host="13.214.114.85";
$user="root";
$password="12345";
$db="donthuoc";
$data=mysqli_connect($host, $user, $password, $db);
if($data==false){
    die("connection error");
}
?>