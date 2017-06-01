<?php
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 
 include_once("config.php");  
 global $appid,$db;  
 $gid=$_GET['g'];
 $pid=$_GET['i'];  
 if(isset($db['items'][$gid][$pid])){
   $grec=$db['groups'][$gid];
    $prec=$db['items'][$gid][$pid];   
  }else{
   echo "ข้อมูลไม่ถูกต้อง";
   return;
 }
 echo "<h3>$prec[name] รหัสสินค้า : $pid </h3> ";
 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
   $img=CloudStorageTools::getImageServingUrl($prec['picfile']);   
   echo "<center><img class='img-responsive' src='$img' width='45%' ></div></center>";
 }
 echo "<div class='one'><h4  style='text-align:center;'>ราคา : $prec[price]</h4></div>";
 echo "<center><div class='two' style='margin-left:15%;margin-right:15%;'><p style='text-align:left'>$prec[detail]</p></div></center>";
?>

<?php

if(UserService::isCurrentUserAdmin()){
 echo "<br><a href='main.php?p=additem&g=$gid&i=$pid'><center><button class='btn btn-primary' style='margin-left:30px; background:#B0B0FF;
 padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;'> Edit </button></center></a><br>";
 // debug
echo "<hr><pre style='margin:10%'>";
print_r($prec);
echo "</pre>";
} 
?>