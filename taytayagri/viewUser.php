<?php
session_start();
require_once("config.php");
include "admin-navbar.php";

$result = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `user_id` DESC");
?>

<html>
<head>	
	<title>Document</title>
</head>

<body>
	<h2>Add</h2>
	<p>
		<a href="addUser.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr>
			<td><strong>First Name</strong></td>
			<td><strong>Last Name</strong></td>
            <td><strong>Username</strong></td>
			<td><strong>Email</strong></td>
            <td><strong>Password</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php

		while ($query = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$query['first_name']."</td>";
			echo "<td>".$query['last_name']."</td>";;	
            echo "<td>".$query['username']."</td>";
			echo "<td>".$query['email']."</td>";;	
            echo "<td>".$query['password']."</td>";
			echo "<td><a href=\"editUser.php?id=$query[user_id]\">Edit</a> | 
			<a href=\"delete.php?id=$query[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
<?php include "footer.html"; ?>