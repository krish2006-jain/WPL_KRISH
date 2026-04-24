<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>
</head>
<body>

<h2>Student Registration</h2>

<form action="insert.php" method="POST">

Name:
<input type="text" name="name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Course:
<input type="text" name="course" required><br><br>

<input type="submit" value="Submit">

</form>

<br>
<a href="fetch.php">View Students</a>

</body>
</html>