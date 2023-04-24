<?php
require_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM users WHERE user_id = $id");

header("Location:viewUser.php");
?>