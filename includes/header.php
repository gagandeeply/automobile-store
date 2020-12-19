<?php include('functions.php'); ?>
<!doctype html>
<html lang="en">
<?php
error_reporting(0);
 $uname = $_SESSION['uname'];
        $email = $_SESSION['email'];
        $id = $_SESSION['id'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kavity | Home</title>
    <!--Ion Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
	
	<script type="text/javascript" src="JS/custom.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo_dark.png" style="height: 40px; width: 30px; padding: 0; margin: 0;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li>
                    <p class="nav-link" id="dateTime"></p>
                    <script>
                        var today = new Date;
                        document.getElementById("dateTime").innerHTML = 'Date: ' + today.getFullYear() + '-' + (today
                                .getMonth() +
                                1) + '-' + today.getDate() + ' ' + today.getHours() + ":" + today.getMinutes() +
                            ":" + today.getSeconds();
                        console.log(today.getMinutes());
                    </script>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
				 <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    
					<?php if($uname !='') 
					{ ?>
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome <?php echo $uname; ?>
                    </a>
						 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
					<?php } else
					{
						?>
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign In
                    </a>
					 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="register.php">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Login</a>
                    </div>
						
					<?php } ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="register.php">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Login</a>
                    </div>
                </li>
                <li class="nav-item" style="display:none;">
                    <a class="nav-link" href="#">Cart</a>
                </li>
            </ul>
        </div>
    </nav>