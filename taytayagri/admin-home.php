<?php
    session_start();
/*    if(isset($_SESSION["user_type"])){
        $_SESSION["user_type"]==1 ? header("Location: admin") : header("Location: user");
    } */
    include "config.php"; 
    include "admin-navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home | Taytay Agriculture Office</title>
</head>
<body>   
    <div class="container">
        <div class="content">
            <h1> Welcome, admin! </h1>
        </div>
    </div>
</body>
</html>
<?php include "footer.html" ?>