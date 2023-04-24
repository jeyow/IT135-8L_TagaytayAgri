<?php
include "admin-navbar.php";
require_once("config.php");

if (isset($_POST['update'])) {
	
	$id = mysqli_real_escape_string($conn, $_POST['id']);

	$first = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last = mysqli_real_escape_string($conn, $_POST['lastname']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);	
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	
	
	if (empty($first) || empty($last) || empty($username) || empty($email) || empty($password)) {
		if (empty($first) && empty($last)) {
			echo "<div class='alert alert-danger'>Name Field is empty. </div>";
		}
		
        if (empty($username)) {
			echo "<div class='alert alert-danger'>Username is empty. </div>";
		}

		if (empty($email)) {
			echo "<div class='alert alert-danger'>Email is empty. </div>";
		}

        if (empty($password)) {
			echo "<div class='alert alert-danger'>Enter your password. </div>";
		}
	} 
    else 
    {
		$result = mysqli_query($conn, "UPDATE `users` SET `username`='$username',`password`='$password',`first_name`='$first',`last_name`='$last',`email`='$email' WHERE `user_id` = $id");
		
        echo "<div class='alert alert-success'>User Details Successfully Updated!</div>";

        header('location: viewUser.php');
	}
}
?>