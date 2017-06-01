<?php error_reporting(0);?>

<hr style='margin-top:120px; ' />
<div class="comment"  style="margin-top:0px; margin-bottom:60px; margin-left:6%; margin-right:6%; border: groove">
<?php
 use google\appengine\api\users\UserService;
 global $appid,$page,$title,$userdata;
 $fbfile = "gs://$appid/main.json";
 $fbdata = array();
 echo "<h4 style='text-align:center; padding-top:50px'>เเสดงความคิดเห็น</h4>";
 if(file_exists($fbfile)){
 $fbjson = file_get_contents($fbfile);
 $fbdata = json_decode($fbjson, true);
 foreach($fbdata as $fb){
 $text = htmlspecialchars($fb['feedback']);
 $time=date("d/m/Y H:i:s",$fb['time']);
 
 $pic = userpic($fb['user']);
 echo "<div class='row' style='padding:20px'>";
 echo "<div class='col-sm-12'>";
 echo "<div class='col-xs-1'><img src='$pic' width='48'></div>";
 echo "<div class='col-xs-11'>";
 echo "<a href='#'>$fb[name]</a><br>$text <br>";
 echo "<a href='#'>ถูกใจ</a> $time<hr>";
 echo "</div>";
 echo "</div>";
 echo "</div>";
 }
 }
 $user = UserService::getCurrentUser();
 if($user){
 include("feedback_add.php");
 }
?>

</div><hr />