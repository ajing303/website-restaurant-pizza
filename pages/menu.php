 <div style="clear:both;"></div>
<?php
        $sql_danhmuc =" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC ";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        
?>


<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    } 
?>




<section class="header_nav" style="background-color:#C00A27;font-family: Montserrat;">
        <div class="header_menu" style="margin-left: 50px">
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="index.php?quanly=thucdon">THỰC ĐƠN</li>
                <li><a href="index.php?quanly=khuyenmai"> KHUYẾN MÃI</a></li>
                <li><a href="index.php?quanly=chinhsach"> CHÍNH SÁCH</a></li>
                <li><a href="index.php?quanly=blog"> BLOG</a></li>
                <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
                 <?php
                if(isset($_SESSION['dangky'])){
            ?>
            <li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
            <?php
                }else{
                  ?>
                  <li><a href="index.php?quanly=dangky">ĐĂNG KÍ</a></li>     
                <?php
                }
                ?>
                <img src="images/logo.jpg" class="logo">
            </ul>
        </div>
    </section>
 
<style type="text/css">

    .header_nav {
        display: inline-table;
        background-color: #C00A27;
        width: 100%;
        height: 4.5%;
    }
    .header_nav .header_menu a{
        margin-right: 20px;
        color: white;
        font-size: 16px;
        text-decoration: none;
        font-weight: bold;
    }
    .header_nav img{
        border: 0;
        width:210px;
        height: 55px;
        cursor: pointer;
        margin-left: 1%;
        margin-top: 1.3%;
 }
    .header_nav .header_menu ul li{
        height: 9%;
        list-style: none;
        color: #fff;
        cursor: pointer;
        border-right: none;
        border-right: 1px solid #A9001B;
        text-align: center;
        font-size: 15px;
        float: left;
        padding: 30px 5px;
        padding-left: 20px;
        margin-top: 0%;
}

</style>
