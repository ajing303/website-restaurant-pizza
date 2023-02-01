<?php
    if(isset($_GET['trang'])){
      $page = $_GET['trang'];
    }else{
      $page = 1;
    }
    if($page=='' || $page==1){
      $begin =0;
    }else {
      $begin = ($page*8)-8; 
    }
    $sql_pro ="SELECT * FROM tbl_sanpham,danhmuc WHERE tbl_sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
        $query_pro = mysqli_query($mysqli,$sql_pro);
  ?>

  <?php
    $sql_danhmuc =" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC ";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);      
  ?>


    <section class="product1">
        <div class="product_menu">
            <h1> 
                 <a style="text-decoration: none; font-family: 'Montserrat',sans-serif; font-size: 22px; font-weight:700;">THỰC ĐƠN<a><hr>
            </h1>
        </div>

    <div class="pr_menu">
    <ul class="li_menu">
            <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                 <a href="thucdon.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
     
            <?php
        }
        ?>
        <?php
             $sql_danhmuc =" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC ";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        
        ?>

            </ul>
        </div>
    </section>

<div style="clear:both;"></div>
<h2 class="h2-dangky" style="font-family: 'Montserrat',sans-serif;line-height: 1.5em; color: black; opacity:0.8; font-size: 25px; float: left; margin-left: 10%; margin-bottom: -0.5%; margin-top: 1%"><i class="material-icons">&#xe5cf;</i>

SẢN PHẨM MỚI NHẤT<h2>

<div style="clear:both;"></div>
<ul class="product_list">
  <?php
    while($row = mysqli_fetch_array($query_pro)){
  ?>

    <li>
     <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?> "style="text-decoration: none;">
      <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
      <p class="title_product"><?php echo $row['tensanpham'] ?></p>
      <p class="price_product"><?php echo number_format($row['giasp'],0,',','.').'₫' ?></p>
       <div class="btn">

         <p><input class="themgiohang" name="themgiohang" type="submit" value="Mua hàng"></input></p> 
           </div></form>  
           </a>     
    </li>

    <?php
  }
    ?>
  </ul>
<style type="text/css">
  .wrapper{
    height: auto;
  }
  .find{
    display: none;
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
<div style="clear:both;"></div>
 <?php
        $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/8);
      ?>
      
     
        <ul class="list_trang">
          <p style="font-family: Montserrat; color: gray; font-size: 20px; ">Trang: <?php echo $page ?>/<?php echo $trang ?> </p>
          <?php
            for($i=1;$i<=$trang;$i++){
          ?>
          <li <?php if($i==$page){ echo 'style="background:#c00a27;"';}else{ echo '';} ?>><a href="index.php?trang=<?php echo $i?>"> <?php echo $i ?></a>
          </li>
          <?php
          }
          ?>
        </ul>
<style type="text/css">
  .list_trang{
    padding: 20px;
    margin: 0;
    list-style: none;
    margin-left: 30%;

  }
  hr {
    width: 30%;
    margin: 20px 0;
    border: 2px solid #f7767d;
    position: relative;
    overflow: visible;
    margin-left: 35%;
}       
hr:after {
    content: "";
    border: 2px solid #C00A27;
    position: absolute;
    width: 50%;
    top: -2px;
    animation: anim-hr 5s linear infinite; 
}
  .list_trang li{
    float: left;
    padding: 5px 12px;
    margin: 4px;
    background-color: #CCCCCC;
    border-radius: 50%;
  }
  .list_trang li a{
    text-align: center;
    color: white;
    font-size: 20px;
    text-decoration: none;
    display: block;

  }
</style>
<div style="clear:both;"></div>