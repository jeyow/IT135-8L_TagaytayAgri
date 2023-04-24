<?php
session_start();
include "navbar.php";
include "contact-form-handler.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contactUs.css">
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>Taytay Agriculture | Contact Us</title>
</head>
<body>
    <div class="content">
        
        <div class="filler" style="height: 15vw;"></div>
        
        <h1>CONTACT US</h1>
        <div class="filler"></div>
        <div class="filler"></div>
        <a href="#">
        <div class="container1">
            <i class="fa-solid fa-phone fa-2xl"></i>
            <h3>8XXX-XXXX</h3>
            <p>Vitae ut leo lorem in turpis </p>
        </div>
        </a>
        <a href="#">
        <div class="container2">
            <i class="fa-sharp fa-solid fa-envelope fa-2xl"></i>
            <h3>8XXX-XXXX</h3>
            <p>Vitae ut leo lorem in turpis </p>
        </div>
    </a>
        <div class="filler"></div>
        <div class="filler"></div>
        <div class="filler"></div>
        <div class="filler"></div>
        <div class="filler"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d685.2294305271922!2d121.1332975871802!3d14.5582138783657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c71c6975e357%3A0xde76a7bf117d5749!2sTaytay%20Agricultural%20Office!5e0!3m2!1sen!2sph!4v1681814912964!5m2!1sen!2sph" 
         allowfullscreen="true" name="Taytay Agriculture"
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="filler"></div>
        <h2>You may also contact us using this form</h2>
        <div class="filler"></div>
        <form method="POST" action="contact-form-handler.php"> <!-----add php POST to submit attribute----->
            <div class="half1">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname">
            </div>
            <div class="half2">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname"><br><br>
            </div>
            <br><br><br><br><br>
            <label for="uemail">E-mail</label>
            <input type="email" id="uemail" name="uemail">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
            <label for="message">Write a message</label>
            <textarea name="message" form="">Type in your message here</textarea>
            <div class="col-md-12 my-2"><?php echo $alert; ?></div>
            <button type="button" name="submit" value="Submit">Submit</button>
        </form>

        <div class="filler"></div>
        <div class="filler"></div>
    </div>
    
</body>
<?php include "footer.html"; ?>
</html>