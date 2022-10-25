
<?php
     include('../config.php');
	 include("lib_db.php");
	//  $MaLoaiSach=$_GET['MaLoaiSach'];
	//  $TenLoaiSach=$_POST['TenLoaiSach'];
	$TenLoaiSach = isset($_REQUEST["TenLoaiSach"]) ? $_REQUEST["TenLoaiSach"] : 0;
	$MaLoaiSach = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	 
	if(isset($_POST['them'])){
		 //Thêm
		 $sql="insert into LoaiSach(TenLoaiSach) value('$TenLoaiSach')";
		 mysql_query($sql);
		 header('location:../../index.php?quanly=quanlyloaisach&ac=them');
	}//sửa
	 elseif(isset($_POST['sua'])){
		echo("Lươn Lan");
		$sql="update LoaiSach set TenLoaiSach='$TenLoaiSach' where MaLoaiSach='$MaLoaiSach'";
		// mysql_query($con, $sql);
		$ret = exec_update($sql);
		header('http://localhost:8080/CHSS/Sourecode/index.php?quanly=quanlyloaisach&ac=sua&MaLoaiSach='. $MaLoaiSach);
	 }//Xóa
	 else{
		 $sql="delete from LoaiSach where MaLoaiSach='$MaLoaiSach'";
		 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlyloaisach&ac=them');
	 }
?>
