<?php
    $sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
    $query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>


<p style="text-align: center;color: slateblue;font-size: x-large;font-weight: bold;">Liệt Kê  Sản Phẩm </p>



<table border="3px" width="100%" style="border-collapse:collapse;">

  

  <tr>
    <th style="text-align: center;">STT</th>
    <th style="text-align: center;">Tên sản phẩm</th>
    <th style="text-align: center;">Hình ảnh </th>
    
    <th style="text-align: center;">Danh mục</th>
    
    <th style="text-align: center;">Tóm tắt</th>

    <th style="text-align: center;">Trạng Thái</th>
    <th style="text-align: center;">Quản lí</th>
    
    
  </tr>

<?php
    $i = 0;
    while($row = mysqli_fetch_array( $query_lietke_bv)){
    $i++;

?>


<tr>

  <th style="text-align: center;"><?php echo $i ?></td>
  <td style="text-align: center;"><?php echo $row['tenbaiviet'] ?></th>
  <th style="text-align: center;"><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="130px"></th>
  
  <td style="text-align: center;"><?php echo $row['tendanhmuc_baiviet'] ?></td>

  <td style="text-align: center;"><?php echo $row['tomtat'] ?></td>


  <td style="text-align: center;"><?php if( $row['tinhtrang']==1){
    echo 'Kích Hoạt';
  }else{
    echo 'Ẩn';
  } 
  
  
  
  ?></td>
  

  <td style="text-align: center;">
  
  <p style="float: right;"><button class="nut1"><a class="mau" 
  href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" ><i class="fa fa-trash" aria-hidden="true"></i>Xóa</a></button></p><p style="float: right;"><button class="nut2"> 
    |<a class="mau" href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Sửa</a></button></p>
      
  </td>
    

</tr>


<?php
}
?>

</table>