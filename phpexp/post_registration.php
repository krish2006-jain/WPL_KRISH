<?php

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];

if(empty($name) || empty($email)){
echo "Name and Email are required";
exit();
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo "Invalid Email Format";
exit();
}

echo "<h2>Registration Details (POST)</h2>";

echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Age: ".$age."<br>";
echo "Password: ".$password."<br>";

?>