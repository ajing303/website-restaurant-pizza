<div id="main">
  
<div class=maincontent>
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam='';
        }
        if($tam=='danhmucsanpham'){
            include("main/danhmuc.php");
        }elseif($tam=='giohang'){
            include("main/giohang.php");
        
        }elseif($tam=='dangky'){
            include("main/dangky.php");
        
        }elseif($tam=='lienhe'){
            include("main/lienhe.php");
        
        }elseif($tam=='sanpham'){
            include("main/sanpham.php");
            
         } elseif($tam=='hotro'){
                include("main/hotro.php");
                
        }elseif($tam=='thanhtoan'){
            include("main/thanhtoan.php");

        }elseif($tam=='thucdon'){
            include("main/thucdon.php");

        }elseif($tam=='timkiem'){
            include("main/timkiem.php");
        
        }elseif($tam=='dangnhap'){
             include("main/dangnhap.php");
        
        }elseif($tam=='chinhsach'){
             include("main/chinhsach.php");

        }elseif($tam=='gioithieu'){
            include("main/gioithieu.php");

        }elseif($tam=='camon'){
            include("main/camon.php"); 

        }elseif($tam=='khuyenmai'){
            include("main/khuyenmai.php");

        }elseif($tam=='blog'){
            include("main/blog.php");

        }elseif($tam=='blogchitiet'){
            include("main/blogchitiet.php");    

        }elseif($tam=='khuyenmaichitiet'){
            include("main/khuyenmaichitiet.php");     
        }else{
            include("main/index.php");
        }
        
    ?>
</div>
</div>
	<div class="clear"></div>