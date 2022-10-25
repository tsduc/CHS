
<?php
     include('../config.php');
	 $id=$_GET['MaNXB'];
	 $TenNXB=$_POST['TenNXB'];
	 $SDT=$_POST['SDT'];
	 $Email=$_POST['Email'];
	 $DiaChi=$_POST['DiaChi'];
	 
	if(isset($_POST['them'])){
		 //Thêm
		 $sql="insert into nhaxb(TenNXB,SDT,Email,DiaChi) value('$TenNXB','SDT','Email','DiaChi')";
		 mysqli_query($con,$sql);
		 header('location:../../index.php?quanly=quanlynxb&ac=them');
	}//sửa
	 elseif(isset($_POST['sua'])){
		$sql="update nhaxb set TenNXB='$TenNXB',SDT='$SDT',Email='$Email',DiaChi='$DiaChi' where MaNXB='$MaNXB'";
		mysqli_query($con,$sql);
		header('location:../../index.php?quanly=quanlynxb&ac=sua&id='.$id);
	 }//Xóa
	 else{
		 $sql="delete from nhaxb where MaNXB='$id'";
		 mysqli_query($con,$sql);
		  header('location:../../index.php?quanly=quanlynxb&ac=them');
	 }
?>
