   <div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h2 style="font-family: Sriracha">Khuyến mãi</h2>
            <p>Trang chủ / Khuyến mãi</p>
        </div>
        <div class="zizag"></div>
    </div>

			

<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 AND id_danhmuc=2  ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?>
<div class="rom">
				
					<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?><div class="photo">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<a href="index.php?quanly=khuyenmaichitiet&id=<?php echo $row_bv['id'] ?>">
						<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
						</a>
					</div></div>
					<?php
					} 
					?>
					
				
			</div>

<style type="text/css">
	.rom {
		margin-left: 11%;
	}
	.rom .photo{
		float: left;
	}
	.rom .photo img{
		width: 500px;
		height: 300px;
		margin-top: 20PX;
		border-radius: 10px;
		margin-right: -10px;

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
      font-size: 25px;
      font-weight: bold;
      color: #FFFC00;
    }
    .wrapper p{
    font-family: Montserrat;
    }
</style>
