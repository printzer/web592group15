<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

global $appid,$user,$userdata;

if(!$user) return;
if($_POST["nick"]){
 $uid = $user->getUserId();
 $userdata['nick']=$_POST['nick'];
 $userdata['fname']=$_POST['fname'];
 $userdata['lname']=$_POST['lname'];
 $userdata['color']=$_POST['color'];
 if($_FILES['pic']['tmp_name']!=''){
 $userpic = "gs://$appid/{$uid}.jpg";
 move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
 }
 $json = json_encode($userdata, JSON_PRETTY_PRINT);
 $userfile = "gs://$appid/user_$uid.json";
 file_put_contents($userfile,$json);
 return;
 }
 $pic = userpic($user->getUserId());
 error_reporting(0);
?>
<div class="col-sm-12">
<?php include("body_edituser.php"); ?>
</div>