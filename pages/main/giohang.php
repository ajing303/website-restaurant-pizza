
<style type="text/css">
    .find{
        display: none;
    }
    .product{
        display: none;
    }
    .product1{
        display: none;
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
    .zizag:before{
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
    .wrapper h2{
      margin-top: -10px;
      font-family: Mali;
      font-size: 25px;
      font-weight: bold;
      color: #FFFC00;
    }
</style>
   <div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h2 style="font-family: Sriracha">Giỏ hàng</h2>
            <p>Trang chủ / Giỏ hàng</p>
        </div>
        <div class="zizag"></div>
    </div>
<p style="color:#000; font-size:xx-large">

<?php
    if(isset($_SESSION['dangky']))
    echo 'Xin Chào:  ' .'<span style="color:red">'.$_SESSION['dangky'].'</span>';
?></p>
<?php
if(isset($_SESSION['cart'])){

}
?>
<style type="text/css">
  .wrapper p{
    font-family: Montserrat;
    }
  .row1{
    margin-left: 16%;
    margin-top: 2%;

  }
  .row1 .tbl .cart th{
    padding-bottom: 10px;
  }
  .row1 .cart1{
    border-top: 2px solid #BBBBBB;
    border-bottom: 2px solid #BBBBBB;
  }
   .row1 .cart1 td li a{
    padding-top: 10px;
    padding-bottom: 10px;
   }
   .row1 .cart1 td li {
    float: left;
   }
   .row1 .cart1 td button .soluong {
    padding-bottom: 0px;
    font-size: 19px;
   }
   .material-icons{
    color:black;
    padding-top: 8px;
   }
   .nut{
    border:0;
    color: white;
    background-color: gray;
     border-radius: 1rem;
   }
   .nut:hover{
    background-color: #C00A27;
   }
    .nutt{
      border: 0;
      background-color: #C00A27;
      border-radius: 5px;
      height: 40px;
   }
   .nut a{
    color: white;
   }
   .header button{
  margin-top: 0;
  height: 62px;
} 
   .mau_nut1{
        font-size: 20px;
        padding: 7px 15px;
        background: #C00A27;
        color: #fff;
        height: auto;
        width: 150px;
        border-radius: 5px;
        margin-top: 10px;
    }
    .mau_nut1:hover{
      color: #E7AD0C;
    }
</style>

<div class="row1" style="margin-bottom: 60px">
      <table  class="tbl" style="width:70%;text-align: center;margin-bottom:30px; margin-left:30px;border-collapse: collapse;">
        <tr class="cart" style="color: #C00A27">
          <th></th>
          <th>Sản phẩm</th>
          <th>Số lượng</th>
          <th>Giá sản phẩm</th>
          <th>Thành tiền</th>
          <th></th>
        </tr>

        <?php
        if(isset($_SESSION['cart'])){
          $i = 0;
          $tongtien = 0;
          foreach($_SESSION['cart'] as $cart_item){
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien+=$thanhtien;
            $i++;
        ?>
        <tr class="cart1">
          <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"height="100px" width="110px" ></td>
           <td><?php echo $cart_item['tensanpham']; ?></td>
          <td>

          <li style="border:0; padding: 0; list-style: none;">
          <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="material-icons">&#xe15b;</i></a></li>
            <li style="border:0; padding: 0; list-style: none;">
            <button class="soluong"style="border:0;height: 40px; background-color: white;" ><?php echo $cart_item['soluong']; ?></button></li>
              <li style="border:0; padding: 0; list-style: none;">
              <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="material-icons">&#xe145;</i></a>
            </li>
          </td>
          <td style="color: #C00A27; font-weight: bold;"><?php echo number_format($cart_item['giasp'],0,',','.').'₫' ; ?></td>
          <td style="color: #C00A27;font-weight: bold;"><?php echo number_format($thanhtien,0,',','.').'₫'?></td>
          <td><button class="nut"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> Xoá</a></button></td>
          
        </tr>

        <?php
          }
        ?>
        <tr>
          <td colspan="8">
            <p style=" float: left; margin-left: 30px; margin-top: 30px; color: #C00A27;font-weight: bold;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'₫ (Chưa bao gồm phí vận chuyển)'  ?></p><br/>            
            <p style="float: right;"><button class="nut"><a href="pages/main/themgiohang.php?xoatatca=1"><i class="fa fa-trash" aria-hidden="true"></i>Xoá tất cả</a></button></p>
                  
            
            <div style="clear:both;"></div>
                <?php
                if(isset($_SESSION['dangky'])){
                ?> 
                  <button class="nutt"><a href="pages/main/thanhtoan.php" style="color: white" >Đặt Hàng</a></button>
                <?php
                }else{
                ?>
                  <button class="nutt"><a href="index.php?quanly=dangky" style="color: white" >Đăng Ký Đặt Hàng</a></button>
                <br></br>
              <?php
              }
              ?>
        </td>
      </div>


      </tr>
      <?php 
      }else{ 
      ?>

      <tr>
       </br>
        <td colspan="8"><p></br>Hiện tại giỏ hàng trống hãy tiến hành đặt hàng ngay</p>
        <a class="mau_nut1"; href="index.php" >Đi đến trang đặt hàng</a></td>
           
       </tr>
      <?php
      } 
      ?>
 
</table>

</div>