<style>
.thumbnail {
	text-align: left;
	background: #F8F8F8;
	border-radius: 3px;
}
</style>
<?php
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 
 echo "
 <br><center><h3>.สินค้ากลุ่ม $grec[name].</h3></center><br>
 ";
 foreach($list as $pid=>$prec){
  $imgtag="";
 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
   $img=CloudStorageTools::getImageServingUrl($prec['picfile']);   
   $imgtag="<img src='$img' width='100%';>";
 }
   
   echo "<div class='col-sm-3'><div class='thumbnail'>
    $imgtag<br><table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;รหัสผลิตภัณท์ <td>&nbsp;&nbsp;&nbsp;&nbsp;$pid
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อสินค้า    <td>&nbsp;&nbsp;&nbsp;&nbsp;$prec[name]
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;ราคาสินค้า   <td>&nbsp;&nbsp;&nbsp;&nbsp;$prec[price] บาท <br>
	</table>
	<br>";

   if(UserService::isCurrentUserAdmin()){
      echo "<a href='main.php?p=detail&g=$gid&i=$pid'>
	        <center><button class='btn btn-primary' style=' background:#B0B0FF;
            padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;'> Detail </button></center></a><br>
			
	       <a href='main.php?p=additem&g=$gid&i=$pid'>
	       <center><button class='btn btn-primary' style=' background:#B0B0FF;
	               padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;'> -Edit- 
	        </button></a></center><br></div></div>";
   }else{
	 echo "<a href='main.php?p=detail&g=$gid&i=$pid'><center><button class='btn btn-primary' style=' background:#B0B0FF;
     padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;'> Detail </button></center><br></a></div></div>";   
   }
 }
   
 echo ""; 
 if(UserService::isCurrentUserAdmin()){
    echo "<div class='col-sm-12'><a href='main.php?p=additem&g=$gid'><br><button class='btn btn-primary' style=' background:#FF9FCF;
     padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;'> Add </button></a></div>";
 }
 ?>
