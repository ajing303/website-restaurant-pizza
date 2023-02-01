<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }
?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,800;1,700&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Sriracha' rel='stylesheet'>
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admincp</title>
    <link rel="stylesheet" type="text/css" href="css/nut.css">
    <link rel="stylesheet" type="text/css" href="css/admincp.css">

	<title>ADMINCP</title>
</head>

<body style=" width: 100%; padding: 0; margin:0">
   <h3 class="title_admin" style="background-color: #1E1E2D; color: white; font-family: montserrat; border: 1px solid #000; margin-bottom: 1px;margin-top: -5px; width: 100%; margin: 0; padding: 0;">MURPHYS ADMIN</h3>
   
	 <div class="wrapper" style="width: 100%;">
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            
            
        ?>
        </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>CKEDITOR.replace( 'tomtat' );</script>
    <script>CKEDITOR.replace( 'noidung' );</script>
</body>

</html> 