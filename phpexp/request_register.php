<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];
$password=$_REQUEST['password'];

if(empty($name) || empty($email)){
echo "Name and Email are required";
exit();
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo "Invalid Email Format";
exit();
}

echo "<h2>Registration Details (REQUEST)</h2>";

echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Age: ".$age."<br>";
echo "Password: ".$password."<br>";

?>