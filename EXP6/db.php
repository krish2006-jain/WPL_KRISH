<?php
$conn = pg_connect("host=localhost dbname=student_db user=postgres password=Krish@140618");

if(!$conn){
    echo "Connection failed";
}
?>