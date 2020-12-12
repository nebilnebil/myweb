<?php
require_once 'db.php';
$name= $_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_con=$_POST['con_password'];
if ($password != $password_con){ 
	echo("is not trues\n");
}
else{
$sql="INSERT INTO users (id,name,email,password) VALUES (NULL,'$name', '$email', '$password');";
$reg=mysqli_query($db,$sql);
if ($reg == true){
	echo("ok done regestres oked");

}
else{
	echo("ok is not regestres");

}
}
?>
