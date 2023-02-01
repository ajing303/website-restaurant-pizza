<?php
    $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
  <p style="text-align: center;color: slateblue;font-size: x-large;font-weight: bold;">Liệt Kê Danh Mục Sản Phẩm </p>
    <table border="3px" width="100%" style="border-collapse:collapse;">
    <tr>
      <th>STT</th>
      <th>Tên danh mục</th>
    <th>Quản lý</th>
    </tr>
<?php
  $i = 0;
  while($row = mysqli_fetch_array( $query_lietke_danhmucbv)){
  $i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td>
    <p  style="float: left;"><button class="nut1"><a class="mau" href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" > <i class="fa fa-trash" aria-hidden="true"></i>Xóa</a></button></p> 
    <p style="float: left;" ><button class="nut2"><a class="mau" href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Sửa</a></button></p>
    </td>
  </tr>
<?php
}
?>
</table>