<?php
    session_start();
    include "config.php";
    include "contact-form-handler.php";
    if(isset($_SESSION["user_role"])){
        $_SESSION["user_role"]==1 ? header("Location: admin-home.php") : header("Location: user-home.php");
    } else {
        header("Location: user-home.php");
    }
?>