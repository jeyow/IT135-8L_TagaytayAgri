<?php
session_start();
include "config.php"; 

    if(isset($_POST['new']) && $_POST['new']==1)
    {
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirmpassword'];
        if (empty($username) || empty($password) || empty($first) || empty($last) || empty($email)) {
            echo "All fields are required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } elseif ($password != $confirm) {
            echo "Passwords do not match.";
        } else {
            $query = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                // Username already taken
                echo "Username is already taken. Please choose a different username.";
            }else{
                    mysqli_query($conn, "INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES (NULL,'$username','$password','$first','$last','$email')");         
                
                    echo "<div class='alert alert-success'>User Details Successfully Updated!</div>";
    
                    header('location: viewUser.php');
                }
            }
            
    }
                    
     mysqli_close($conn);
?>
                