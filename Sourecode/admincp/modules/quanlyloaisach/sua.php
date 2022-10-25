<?php
// $MaLoaiSach = $_POST['MaLoaiSach'];
$MaLoaiSach = isset($_REQUEST["MaLoaiSach"]) ? $_REQUEST["MaLoaiSach"] : 0;

$sql=" select * from loaisach where MaLoaiSach='$MaLoaiSach'";
$run=mysqli_query($con,$sql);
$dong=mysqli_fetch_array($run);
?>
<style>
th{
	background:#999;
	}
}
	
</style>
<form action="modules/quanlyloaisach/xuly.php?id=<?php echo $MaLoaiSach?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <th height="43" colspan="2" align="center">Sửa Loại Sách</th>
  </tr>
  <tr>
    <td height="59">Tên Loại Sách</td>
    <td><input type="text" name="TenLoaiSach" value="<?php echo $dong['TenLoaiSach'] ?>"></td>
  </tr>
  
  <tr>
    <td height="57" colspan="2" align="center">
      
        <input type="submit" name="sua" id="sua" value="Sửa">
      
    </td>
  </tr>
</table>
</form>