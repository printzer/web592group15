<?php
use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic);
}
?>
<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
global $user,$userdata,$appid;

$user = UserService::getCurrentUser();

if (isset($user)) {
$uid = $user->getUserId();
 $userfile = "gs://$appid/user_$uid.json";
 $userdata = array();
 if(file_exists($userfile)){
 // จะโหลดข ้อมูลในไฟล์ json
 $filedata = file_get_contents($userfile);
 $userdata = json_decode($filedata,true);
 }else{
 $userdata['nick']=$user->getNickname();
 
}
?>
<?php
   $list = [
     ["edituser","Account"], ];
   
 ?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
<?php 
echo "<img src='".userpic($uid)."' width='20' >&nbsp;&nbsp;";
echo $userdata['nick']; 

?>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li>

     <?php
    foreach($list as $m){
	 $cs="";
	 if($m[0]==$page)$cs=" class=active ";
	    echo "<li $cs><a href=\"main.php?p=$m[0]\">$m[1]</a></li>";
	}?>
</li>


      <li><a href="<?= UserService::createLogoutUrl('/') ?>">Logout</a></li>
</ul>
</li>
<?php	
   if(UserService::isCurrentUserAdmin()){
     include("menu_admin.php"); 
   }
} else {
  echo sprintf('<li><a href="%s">Sign in or register</a>',
               UserService::createLoginUrl('/'));
}
?>
