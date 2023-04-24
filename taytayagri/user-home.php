<?php
    session_start();
/*    if(isset($_SESSION["user_type"])){
        $_SESSION["user_type"]==1 ? header("Location: admin") : header("Location: user");
    } */
    include "config.php"; 
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | Taytay Agriculture Office</title>
</head>

<body>

  <h1>HOME</h1>
  <h2>Our Programs</h2>
  <h2>About Us</h2>
  <h2>News and Events</h2>

</body>
</html>

    <!-- Redirect to Log In page -->
   
<?php include "footer.html" ?>
