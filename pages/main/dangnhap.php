<div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h2 style="font-family: Sriracha">Đăng nhập</h2>
            <p>Trang chủ / Đăng nhập</p>
        </div>
        <div class="zizag"></div>
    </div>
<?php
	    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
             $_SESSION['id_khachhang'] = $row_data['id_dangky'];
echo "<script> window.location.href='index.php?quanly=giohang'; </script>";           
        }else{
			echo '<p style="color:red; margin-bottom:-20px; margin-top:50px; text-align:center">Email hoặc tài khoản sai, vui lòng nhập lại.</p>';
           
         }
	}
?>

<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
    <table class="table-login" width="440px" style="border-collapse: collapse; font-family: Montserrat;">
		<tr class="top" style="margin-right: 10px"><td style="font-size: 25px; padding-left: 54px;line-height: 50px; font-weight: bold; padding-top: 20px;">THÔNG TIN ĐĂNG NHẬP</td></tr>
		<tr style="color: #C00A27">
			<td><input type="text" name="email" placeholder="Nhập địa chỉ email"></td>
		</tr><br>
		<tr>
			<td ><input type="password" name="password" placeholder="Nhập mật khẩu"></td>
		</tr><br>
		<tr>
			<td><input type="submit" style="width: 120px;font-weight: bolder; margin-bottom: 20px; margin-left: 33%; color: white; background-color: #C00A27" name="dangnhap" value="Đăng nhập"></td>
		</tr>
	</table>
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</div>
<style type="text/css">
    table .table-login tr td{
        padding: 5px;
    }
      .wrapper{
    height: auto;
    }
    #main{
        height: auto;
    }
    .footer{
        height: auto;
    }
    .product2{
        display: none;
    }
    .find{
        display: none;
    }
    .product{
        display: none;
    }
   .images {
        background: url(../images/nen.jpg) no-repeat;
        background-size: cover;
        -webkit-background-size : cover;
        height: 140px;

    }
    .images .wrapper{
        color: white;
        text-align: center;
        position: static;
        right:30%;
        left: 35%;
        padding-top: 50px;
    }
    .zizag::before{
        margin-bottom:379px;
        position: absolute;
        bottom: 15px;
        width: 100%;
        height: 15px;
        background-image: linear-gradient(45deg, #fff 50%, transparent 50%),
        linear-gradient(-45deg, #fff 50%, transparent 50%);
        background-size: 15px 15px;
        content: '';

    }
    .wrapper{
      padding-left: 0;
      
    }
    .wrapper p{
    font-family: Montserrat;
}
    .wrapper h2{
      margin-top: -10px;
      font-family: Mali;
      font-size: 25px;
      font-weight: bold;
      color: #FFFC00;
    }
    
    .table-login{
        margin-top: 1%;
        background-color: #EEEEEE;
        margin-left: 34%;
        margin-bottom: 7%;
    

    }
    input{
        margin-top: 20px;
        margin-left: 25px;
        width: 380px;
        padding: 7px;
         border-radius: 2rem;
         border: 0;
    }

    table{
        border-radius: 0.8rem;
        border: 0;
        margin-top: 20px;
        padding-top: 20px;
        box-shadow: 1px 5px 3px 7px #ddd;


    }
    tr .bot{
        background-color: #C00A27;
        color: white;

    }
</style>