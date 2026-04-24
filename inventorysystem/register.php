<?php
include "db.php";

if(isset($_POST['register'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

$conn->query($sql);
echo "User Registered";
}
?>

<form method="POST">
<input type="text" name="username" placeholder="Username"><br>
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>

<button name="register">Register</button>
</form>