<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- <title>Document</title> -->
</head>
<body>
    <header>
        <a href="admin-home.php" class="logo"><img src="navbar-image/logo.png"></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>

        <nav class="navbar">
            <ul>
                <li><a href="#">MANAGE POSTS +</a>
                    <ul>
                        <li><a href="#">PROGRAMS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">EVENTS</a></li>
                    </ul>
                </li>
                <li><a href="viewUser.php">MANAGE USERS</a></li>
                <li><a href="#">ACCOUNT</a>
                    <?php if(empty($_SESSION['username']))
                            {
                                echo '<ul><li><a href="logIn.php">LOGIN</a></li></ul>';
                            }else
                            {
                                echo '<ul><li><a href="logout.php">LOGOUT</a></li></ul>';
                            }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
       
</body>

</html>