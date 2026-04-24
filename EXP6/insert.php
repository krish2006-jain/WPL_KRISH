<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$query = "INSERT INTO students(name,email,course)
VALUES('$name','$email','$course')";

$result = pg_query($conn,$query);

if($result){
echo "Data inserted successfully";
}
?>