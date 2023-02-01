<div class="dmsp">
<p style="color: #1E1E2D; font-family: montserrat; padding-left: 7%; font-size: 20px; font-weight: bolder;">Thêm danh mục sản phẩm</p>
<div style="clear:both;"></div>
<table class="main"  width="50%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlydanhmucsp/xuly.php">
	<tr>
		<td>Tên danh mục</td>
		<td><input type="text" name="tendanhmuc"></td>
	</tr>
	<tr>
		<td>Thứ tự</td>
		<td><input type="text" name="thutu"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" style="font-family: montserrat; font-weight: bold;" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
	</tr>
</form>
	
</table>
</div>
<style type="text/css">
	.dmsp{
		border: 0;
	}
	.dmsp table{
		width: 20%;
		margin-left: 100px;
		background-color: #1E1E2D;
		border-radius: 15px;
	}
	.dmsp .main tr td{
		color: white;
		border-radius: 15px;
		padding-left: 10px;

	}
	.dmsp .main tr{
		line-height: 50px;

	}
	.dmsp .main tr td input{
		border-radius: 15px;
		color: #1E1E2D;
	}
</style>