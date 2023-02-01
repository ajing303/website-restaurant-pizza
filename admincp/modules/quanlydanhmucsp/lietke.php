<?php
    $sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div class="lietke">
  <p style="text-align: center; color: #1E1E2D; font-family: montserrat;  font-size: 20px; font-weight: bolder;">LIỆT KÊ DANH MỤC SẢN PHẨM </p>
    <table border="3px" class="lk" width="100%" style="border-collapse:collapse;">
    <tr>
      <th>STT</th>
      <th>Tên danh mục</th>
    </tr>
<?php
  $i = 0;
  while($row = mysqli_fetch_array( $query_lietke_danhmucsp)){
  $i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
    <p  style="float: left;"><button class="nut1"><a class="mau" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" > <i class="fa fa-trash" aria-hidden="true"></i>Xóa</a></button></p> 
    <p style="float: left;" ><button class="nut2"><a class="mau" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Sửa</a></button></p>
    </td>
  </tr>
<?php
}
?>
</table>
</div>
<style type="text/css">
  .lietke .lk{
    width: 82%;
    margin-left: 100px;
    border-radius: 15px;
  }

</style>