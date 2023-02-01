<?php
   
    if(isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $nhaplaimatkhau = md5($_POST['nhaplaimatkhau']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,dienthoai,diachi,matkhau,nhaplaimatkhau) VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$diachi."','".$matkhau."','".$nhaplaimatkhau."')");
        if($sql_dangky){
            echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
            
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            echo "<script> window.location.href='index.php?quanly=giohang'; </script>";   
        }
    }

?>
    <div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h2 style="font-family: Sriracha">Đăng kí</h2>
            <p>Trang chủ / Đăng kí</p>
        </div>
        <div class="zizag"></div>
    </div>

<style type="text/css">
    table.dangky tr td{
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
    .dangky{
        margin-top: 3%;
        background-color: #DDDDDD;
        margin-left: 34%;
        margin-bottom: 3%;

    }
    input{
        margin-left: 15px;
        width: 400px;
        padding: 7px;
         border-radius: 2rem;
         border: 0;
    }

    table{
        border-radius: 0.8rem;
        border: 0;
        margin-top: 20px;
        padding-top: 20px;

    }
    tr .bot{
        background-color: #C00A27;
        color: white;

    }
</style>

<form action="" method="POST">
    <table class="dangky" width="440px" style="border-collapse: collapse; font-family: Montserrat;">
    <tr class="top" style="margin-right: 10px"><td style="font-size: 25px;padding-left: 25px; font-weight: bold; padding-top: 20px;">THÔNG TIN THANH TOÁN</td></tr>
    <tr class="dk">
        <td><input placeholder=" Họ và tên" type="text" size="50" name="hovaten"></td>
    </tr>
    <tr>
        <td><input placeholder=" Email" type="text" size="50" name="email"></td>
    </tr>
    <tr>
        <td><input placeholder=" Số điện thoại" type="text" size="50" name="dienthoai"></td>
    </tr>
    <tr>
        <td><input placeholder=" Địa chỉ" type="text" size="50" name="diachi"></td>
    </tr>
    <tr>
        <td><input placeholder=" Mật khẩu" type="password" size="50" name="matkhau"></td>
    </tr>
    <tr>
        <td><input placeholder=" Nhập lại mật khẩu"  type="password" size="50" name="nhaplaimatkhau"></td>
    </tr>
    <tr>
        <td style="padding-left: 25px;font-size: 15.5px">Quý khách vui lòng điền đầy đủ thông tin để Pizza MURPHY'S phục vụ quý khách được tốt nhất!</td>
    </tr>
    <tr>
        <td colspan="2"><input class="bot" style="width: 120px; margin-bottom: 5px" type="submit"  name="dangky" value="Đăng ký">&emsp;
        <a style="color: #C00A27; font-weight: bolder; font-size: 15px" href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
    </tr>
</table>
</form>