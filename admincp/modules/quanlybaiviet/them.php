<p style="text-align: center;color: slateblue;font-size: x-large;font-weight: bold;"> Thêm sản phẩm</p>

<table border="3px" width="100%" style="border-collapse:collapse;">
<form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">


<tr>
  <th style="text-align: center;">Tên Bài Viết</th>
  <td><input type="text" name="tenbaiviet"></td>
</tr>



<tr>
  <th style="text-align: center;">Hình ảnh</th>
  <td ><input type="file" name="hinhanh" ></td>
  
</tr>

<tr>
  <th style="text-align: center;">Tóm tắt</th>
  <td><textarea   name="tomtat" style="resize: none"></textarea></td>
  
</tr>

<tr>
  <th style="text-align: center;">Nội Dung</th>
  <td><textarea   name="noidung" style="resize: none"></textarea></td>
  
</tr>

<tr>
  <th style="text-align: center;">Danh mục Bài Viết</th>
  <td>
    <select name="danhmuc">
     <?php
        $sql_danhmuc =" SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC ";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
          <option value ="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>

          <?php
        }
          ?>

    </select>
  </td>
  
</tr>

<tr>
  <th style="text-align: center;">Tình Trạng</th>
  <td>
    <select name="tinhtrang">
      <option value="0">Kích hoạt</option>
      <option value="1">Ẩn</option>

    </select>
  </td>
  
</tr>




<tr> 
  <td colspan="2"> <input type="submit" name="thembaiviet" value="Thêm bài viết"></td>
</tr>
</form>
</table>