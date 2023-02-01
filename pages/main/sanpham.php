<style type="text/css">
.wrapper_sanpham .hinhanh_sanpham{
    /* background: #FFFFE0; */
    margin-top: -1%;
    margin-left: 14%;
    float:left;
    width:20%;
    text-align: center;
    margin-bottom: 2%;
   /* box-shadow: 1px 5px 3px 7px #ddd;*/
    border-radius: 7px;
}
.wrapper_sanpham .hinhanh_sanpham img{
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
}
.wrapper_sanpham{
    margin-top: 5%;
}
.wrapper_sanpham .chitiet_sanpham{
    margin: 0px;
    /* background: #FFFFE0; */
    float:left;
    width:50%;
    text-align: left;
    margin-left: 30px;
    margin-top: 0px;
    height: auto;
    box-shadow: 1px 5px 3px 7px #FDE2CA;
    border-radius: 7px;
    line-height: 20px;
}


.chitietsp{
    text-align: center;
    color: cornflowerblue;
    font-size:xx-large;
}
.chitiet_sanpham p{
    margin-left: 20px;
    margin-right: 10px;
}
.themgiohang{
    background-color: #C00A27;
    color: white;
    border-radius: 7px;
    width: 180px;
    height: 40px;
    box-shadow: 1px 5px 3px 3px #ddd;

}
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
   .images{
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
    .wrapper p{
    font-family: Montserrat;
    }
    .wrapper h3{
      margin-top: -10px;
      font-family: Mali;
      font-size: 25px;
      font-weight: bold;
      color: #FFFC00;
    }</style>
</style>
   <div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h3 style="font-family: Sriracha;">Sản phẩm</h3>
            <p>Trang chủ / Sản phẩm</p>
        </div>
        <div class="zizag"></div>
    </div>

<?php
         $sql_chitiet ="SELECT * FROM tbl_sanpham,danhmuc WHERE tbl_sanpham.id_danhmuc=danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]'   LIMIT 1 ";
         $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
        while($row_chitiet = mysqli_fetch_array($query_chitiet)){

        

?>

<div  class="wrapper_sanpham">
        <div class="hinhanh_sanpham">
            <img width="100%" src=" admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div   class="chitiet_sanpham">
            <h4 style="margin-left:20px;margin-top:10px;font-weight: bold; "><?php echo $row_chitiet['tensanpham'] ?></h4>
            <p style="font-weight: bold;">- Giá: <b style="color: #C00A27"><?php echo number_format($row_chitiet['giasp'],0,',','.').'VNĐ' ?></b> </p>
            <p>- <?php echo $row_chitiet['tomtat'] ?> </p>
            <p>- <?php echo $row_chitiet['noidung'] ?> </p>
            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm Giỏ Hàng"></input></p>

        </div>
</div>
        </form>
<?php

        }

?>
</table>
