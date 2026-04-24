<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email'";
$result=$conn->query($sql);

if($result->num_rows>0){

$row=$result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user']=$row['username'];

if(isset($_POST['remember'])){
setcookie("user",$row['username'],time()+3600);
}

header("Location: dashboard.php");
}
}
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>

<input type="checkbox" name="remember"> Remember Me<br>

<button name="login">Login</button>

</form>