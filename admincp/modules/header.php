<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
 <p style="font-family: Montserrat;text-align: center; font-weight: bolder; padding-top: 20px; margin-top:-10px; background-color: #1E1E2D; width: 100%; height: 40px;"><a  style="color: white; margin-top: 10px; text-decoration: none; text-align: center;" href="index.php?dangxuat=1">ĐĂNG XUẤT ADMIN: <?php if(isset($_SESSION['dangnhap'])){
     	echo $_SESSION['dangnhap'];}?></a></p>