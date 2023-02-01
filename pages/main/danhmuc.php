<?php
        $sql_pro ="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC ";
        $query_pro = mysqli_query($mysqli,$sql_pro);
        //lay ten danh muc
        $sql_cate ="SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc='$_GET[id]' LIMIT 1 ";
       $query_cate = mysqli_query($mysqli,$sql_cate);
        $row_title = mysqli_fetch_array($query_cate);
?>
<h3 style="font-family: 'Montserrat',sans-serif;line-height: 1.5em;font-weight:bolder; color: black; opacity:0.8; font-size: 25px;  margin-left: 10%;margin-bottom: -0.5%; margin-top: 1%">  <i class="material-icons">&#xe5cf;</i><?php echo 'Danh Mục Sản Phẩm: '.'<span style="color:#edbe15; font-weight:bold;">' .$row_title['tendanhmuc'].'</span>' ?> </h3>
<ul class="product_list">
  <?php
    while($row = mysqli_fetch_array($query_pro)){
  ?>
    <li>
     <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?> "style="text-decoration: none;">
      <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
      <p class="title_product"><?php echo $row['tensanpham'] ?> </p>
      <p class="price_product"><?php echo number_format($row['giasp'],0,',','.').'₫' ?></p>
      <div class="btn">

         <p><input class="themgiohang" name="themgiohang" type="submit" value="Mua hàng"></input></p> 
           </div>
      </a>
       
          
    </li>

    <?php
  }
    ?>
  </ul>
  <?php
    include("pages/info.php");
  ?>
    <?php
    include("pages/footer.php");
  ?>
<style type="text/css">
   .container-fluid {
  width: 100%;
  padding-right: 0px;
  padding-left: 0px;
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
  .btn{
    margin-top: -22px;
    margin-left: 5px;
  }
  .btn .themgiohang{
    border:none;
    outline: none;
    width: 100%;
    color: white;
    border-radius: 15px;
    padding: .2rem;
    margin-left: 100%;
    background: #C00A27;
    font-size: 12px;
    font-weight: bolder;
    font-family: Montserrat;
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
