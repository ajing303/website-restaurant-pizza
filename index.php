<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,800;1,700&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Sriracha' rel='stylesheet'>
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/dangki.css">
    <link rel="stylesheet" type="text/css" href="css/timkiem.css">
    <link rel="stylesheet" type="text/css" href="css/lienhe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
	<title>Pizza, Đặt Pizza ngon, giá rẻ tại PizzaRachGia</title>
</head>

<body>
	<div class="wrapper">
		<?php
            session_start();
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/info.php");
            include("pages/footer.php");
        ?>
    	</div>

</body>

</html> 