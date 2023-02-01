<?php
    if(isset($_POST['timkiem'])){
        $tukhoa=$_POST['tukhoa'];
    }
  $sql_pro ="SELECT * FROM tbl_sanpham,danhmuc WHERE tbl_sanpham.id_danhmuc=danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
        $query_pro = mysqli_query($mysqli,$sql_pro);

?>

<style type="text/css">
  .product{
    display: none;
  }

</style>
 <?php
    include("pages/find.php");
  ?>
<h3 style="font-family: 'Montserrat',sans-serif;line-height: 1.5em; color: black;font-weight: bolder; opacity:0.8; font-size: 25px;  margin-left: 10%;margin-bottom: -0.5%; margin-top: 1%">  <i class="material-icons">&#xe5cf;</i> Từ khóa tìm kiếm: <span style="color:#edbe15; font-weight:bold;"><?php  echo $_POST['tukhoa'] ?></span> <h3>
  <ul class="product_list">
      <?php
        while($row_pro = mysqli_fetch_array($query_pro)){
      ?>
      <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" style="text-decoration:none;">
        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>">
        <p class="title_product"><?php echo $row_pro['tensanpham'] ?> </p>
        <p class="price_product"><?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ' ?></p>
        </a>
    </li>
    <?php
    }
    ?>
</ul>
<style type="text/css">
.product_list .title_product{
  text-align: center;
  color: #000;
  font-size: 16px;
  font-weight: bold;
}
.price_product{
  text-align: center;
  color: red;
  font-size: 16px;
  font-weight: bold;
}
/* gia */

p.ten{
  text-align: center;
  text-decoration: none;
  color: #000;
  font-size: 16px;
  font-weight: bold;
  font-family: arial;
    
}
p.gia{
  text-align: center;
  text-decoration: none;
  color: red;
  font-size: 16px;
  font-weight: bold;
}

</style>
<div style="clear:both;"></div>
<style type="text/css">
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
  .btn{
    margin-top: -22px;
    margin-left: 5px;
  }
  .btn .themgiohang{
    border:none;
    outline: none;
    width: 100%;
    color: white;
    border-radius: 1.5rem;
    padding: .2rem;
    margin-left: 45px;
    background: #C00A27;
  }

.header button{
  margin-top: 0;
  height: 62px;
}

  ul.li_menu a{
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #C00A27;
    display block;
    margin-left: 40px;
    font-family: Sriracha;
    font-size: 25px;
    font-weight: bolder;  
  }
  .product1{
    height: 150px;
    text-align: center;
  }
  .product{
    display: none;
  }
  .product_list{
    padding-left: 8%;
  }
  .product_list li{
    margin-top:22px; 
    width: 20%;
    border: 0px solid #F19373;
    margin-left: 2%;
    float: left;
    height: 290px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 4px #FDE2CA;

  }
  .pr_menu{
    height: auto;
    width: 100%;
    margin-top: 10px;
    margin-left: -45px;
    float: left;
    padding: -20px;
    padding-bottom: 10px;
    text-align: center;
  }
  .li_menu{
    margin: 0px;
    padding: 0px;
  }
  .product_list li img{
    width: 80%;
    margin-left: 10%;
  }
  .product_list .title_product{
    text-align: center;
    color: #000;
    font-size: 14px;
    font-family: Montserrat;
  }
  .price_product{
    text-align: center;
    color: #C00A27;
    font-size: 16px;
    font-family: Montserrat;
    margin-top: -15px;
  }

</style>
        </div>
