<!-- Nav Bar -->
<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="logIn.css">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    

        
    <title>Log In | Taytay Agriculture Office</title>
</head>
<body>


    <!-- Sign Up Form -->
    <div class="container">
        <div class="content">
            <h1>Log In</h1>
            <div class="forms">
                <form  action="loginConfig.php?op=in" method ="POST">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" required><br>

                    <label for="password">Password</label><br>
                    <input type="text" id="password" name="password" required><br>

                    <button type="submit" name="login" id="submit-btn">Log In</button>
                </form>
           </div>
       </div>
   </div>

    <!-- Redirect to Log In page -->
    <div class="redirect">
        <p>Don't have an account? <a href="signUp.php">Sign Up</a></p>
    </div>

    <!-- Footer -->
<?php include "footer.html"; ?>
</body>
</html>