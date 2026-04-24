<?php
include 'db.php';

$result = pg_query($conn,"SELECT * FROM students");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
</tr>";

while($row = pg_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['course']."</td>";
echo "</tr>";
}

echo "</table>";
?>