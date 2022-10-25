<div class="content">
       <?php
	   if(isset($_GET['quanly'])){
		   $tam=$_GET['quanly'];
	   }else{
		   $tam='';	   
	   }if($tam=='quanlyloaisach'){
		   include('admincp/modules/quanlyloaisach/main.php');
	   }if($tam=='quanlychitietsach'){
		   include('admincp/modules/quanlychitietsach/main.php');
	   }if($tam=='quanlynguoidung'){
		   include('admincp/modules/quanlynguoidung/main.php');
	   }
	   if($tam=='quanlynxb'){
		   include('admincp/modules/quanlynxb/main.php');
	   }
	   if($tam=='quanlytacgia'){
		   include('admincp/modules/quanlytacgia/main.php');
	   }
	   ?>     
       
<br />
<div class="clear"></div>