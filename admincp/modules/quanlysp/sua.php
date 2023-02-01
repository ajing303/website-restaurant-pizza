<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'  LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p> Sửa  sản phẩm</p>



<table border="3px" width="100%" style="border-collapse:collapse;">
          <?php
            while ($row = mysqli_fetch_array($query_sua_sp)) {
          ?>  


          <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data">


          <tr>
            <th style="text-align: center;">Tên Sản Phẩm</th>
            <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
          </tr>
          <tr>
            <th style="text-align: center;">Mã Sản Phẩm</th>
            <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
          </tr>

          <tr>
            <th style="text-align: center;">Giá Sản Phẩm</th>
            <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
          </tr>

          <tr>
            <th style="text-align: center;">Số lượng</th>
            <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
            
          </tr>

          <tr>
            <th style="text-align: center;">Hình ảnh</th>
            <td >
                <input type="file" name="hinhanh" >
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
            </td>
           
          </tr>

          <tr>
            <th style="text-align: center;">Tóm tắt</th>
            <td><textarea   name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
            
          </tr>

          <tr>
            <th style="text-align: center;">Nội Dung</th>
            <td><textarea   name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
            
          </tr>

          <tr>
            <th style="text-align: center;">Danh mục sản phẩm</th>
            <td>
              <select name="danhmuc">
              <?php
                  $sql_danhmuc =" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC ";
                  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                  while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){

                    
                      ?>
                    <option selected value ="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

                    <?php
                  }else{
                    ?>
                    <option  value ="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                  <?php
                  }
                  }
                    ?>

              </select>
            </td>
            
          </tr>

          <tr>
            <th  style="text-align: center;">Tình Trạng</th>
            <td>
              <select name="tinhtrang">
              <?php  
              if($row['tinhtrang']==1){
                ?>
                <option value="1" selected>Kích hoạt</option>
                <option value="0">Ẩn</option>
                <?php
              }else{
                ?>
                <option value="1">Kích hoạt</option>
                <option value="0" selected>Ẩn</option>
                <?php
              }
              ?>

              </select>
            </td>
            
          </tr>


          <tr> 
            <td style="text-align: center;" colspan="2"> <input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
          </tr>
          <?php
          }
          ?>
          </form>
         
</table>