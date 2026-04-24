<?php

$name=$_GET['name'];
$email=$_GET['email'];
$age=$_GET['age'];
$password=$_GET['password'];

if(empty($name) || empty($email)){
echo "Name and Email are required";
exit();
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo "Invalid Email Format";
exit();
}

echo "<h2>Registration Details (GET)</h2>";

echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Age: ".$age."<br>";
echo "Password: ".$password."<br>";

?>