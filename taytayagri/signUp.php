<?php
    session_start();
/*    if(isset($_SESSION["user_type"])){
        $_SESSION["user_type"]==1 ? header("Location: admin") : header("Location: user");
    } */
    include "navbar.php";
    include "config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signUp.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    


    <title>Sign Up | Taytay Agriculture Office</title>
</head>
<body>    
    <!-- Sign Up Form -->
    <div class="container">
        <div class="content">
            <h1>Sign Up</h1>
            <div class="forms">
                <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                    <label for="first_name">First Name</label><br>
                    <input type="text" id="first_name" name="first_name" required><br>

                    <label for="last_name">Last Name</label><br>
                    <input type="text" id="last_name" name="last_name" required><br>

                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" required><br>

                    <label for="email">Email Address</label><br>
                    <input type="text" id="email" name="email" required><br>

                    <label for="password">Password</label><br>
                    <input type="text" id="password" name="password" required><br>

                    <label for="confirm-password">Confirm Password</label><br>
                    <input type="text" id="confirm-password" name="confirm-password" required>

                    <button type="submit" name="signup" id="submit-btn">Sign Up</button>
                </form>
                <?php
                        if(isset($_POST["signup"])){
                            //if field are empty
                            if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["email"])) {
                                echo "All fields are required.";
                            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                                echo "Invalid email format.";
                            } elseif ($_POST["password"] != $_POST["confirm-password"]) {
                                echo "Passwords do not match.";
                            } else {
                                $first_name = $_POST["first_name"];
                                $last_name = $_POST["last_name"];
                                $username = $_POST["username"];
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                $confirm_password = $_POST["confirm-password"];
                                $query = "SELECT * FROM users WHERE username='$username'";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    // Username already taken
                                    echo "Username is already taken. Please choose a different username.";
                                }else{
                                    $sql1 = "INSERT INTO users (username, password, first_name, last_name, email)
                                    VALUES ('$username', '$password', '$first_name', '$last_name', '$email')";
                                    if ($conn->query($sql1) === TRUE) {
                                        echo "Registration successful.";
                                        header("Location: logIn.php");
                                        } else {
                                        echo "Error: " . $sql1 . "<br>" . $conn->error;
                                        }
                                }

                                }
                            }
    
                      ?>
            </div>
        </div>
    </div>

    <!-- Redirect to Log In page -->
    <div class="redirect">
        <p>Already have an account? <a href="logIn.php">Log In</a></p>
    </div>
<?php include "footer.html"; ?>
</body>
</html>