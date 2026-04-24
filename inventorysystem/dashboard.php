<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<h2>Inventory Dashboard</h2>

Welcome <?php echo $_SESSION['user']; ?>

<br><br>

<a href="logout.php">Logout</a>