
<?php

        $sql_danhmuc =" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC ";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        
?>

   <section class="product2">
        <div class="product_menu">
            <h1> 
                <a style="text-decoration: none; font-family: 'Montserrat',sans-serif; font-size: 22px; font-weight:700;">THỰC ĐƠN<a><hr>
            </h1>
        </div>
    <div class="pr_menu">
    <ul class="li_menu">
    </style>
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
<style type="text/css">
    .product2{
    height: 150px;
    text-align: center;
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
    ul.li_menu a{
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #C00A27;
    display block;
    margin-left: 40px;
    font-family: 'Mali';
    font-size: 22px;
    
}
</style>

  