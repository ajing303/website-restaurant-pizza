  <div style="clear:both;"></div>
   <div class="images" style="background-image: url('images/nen.jpg');">
        <div class="wrapper">
            <h2 style="font-family: Sriracha">Khuyến mãi</h2>
            <p>Trang chủ / Khuyến mãi</p>
        </div>
        <div class="zizag"></div>
    </div>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	$query_bv_all = mysqli_query($mysqli,$sql_bv);
	
	$row_bv_title = mysqli_fetch_array($query_bv);
?><div class="tieude">
<h3 ><span style="text-align: center;text-transform: uppercase;font-family: Montserrat;
        font-size: 20px; font-weight: bolder;"><?php echo $row_bv_title['tenbaiviet'] ?></span></h3></div>

				<ul class="baiviet">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv_all)){ 
					?><li style="float: left; list-style: none; margin-top: 0.5%;">
                        <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">                
                    </li>
					<li style="list-style: none; margin-left: 48%; margin-right: 4%; text-align: justify;">
						<p style="margin:10px" class="title_product"><?php echo $row_bv['noidung'] ?></p>
						<p class="title_product"><?php echo $row_bv['tomtat'] ?></p>

					</li>
					<?php
					} 
					?>
					
				</ul>
<style type="text/css">
    .tieude{
        text-align: center; 
        margin-top: 2%; 
        margin-bottom: 1%;   
    }
    .baiviet img{
        width: 600px;
        height: 370px;
        border-radius: 10px;
    }
    .baiviet p{
        font-family: Montserrat;
    }
	hr{
		    border: 1px solid #C00A27;
		    margin-right: 20%;
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
      font-family: Mali;
      font-size: 25px;
      font-weight: bold;
      color: #FFFC00;
    }
    .wrapper p{
    font-family: Montserrat;
    }
</style>