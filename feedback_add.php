<style>
.ff{
	margin-bottom:10px;margin-left:50px;
	background:#BFBFFF;
	
	
}
</style>
<?php
error_reporting(0);
?> 
<?php
if(!$user) return;
global $userdata;
if($_POST["feedback"]){
$rec=array();
$rec['user']=$user->getUserId(); 
$rec['name']=$userdata['nick']; 
$rec['feedback']=$_POST['feedback']; 
$rec['time']=mktime(gmdate("H")+7,gmdate("i"),gmdate("m"),gmdate("d"),gmdate("Y")); 

$fbdata[ ] = $rec;
$fbjson = json_encode($fbdata, JSON_PRETTY_PRINT);
file_put_contents($fbfile,$fbjson);
echo "<a href='main.php?p=$main' id='pagelink'><button class='btn btn-default'  style='padding:15px;margin-bottom:30px;margin-left:100px;
background:#BFBFFF;'>
ยืนยันการส่งข้อมูล</button></a>";
 return;
 }
  $pic = userpic($user->getUserId());
?>
<br><br>
<form method="post" action="">
<div class="row" style=" margin:20px">
<div class="col-xs-1"><?= "<img src='$pic' width='48'>" ?></div>
<div class="col-xs-11">
 <label for="feedback"><?= $userdata['nick'] ?></label>
 <div class="input-group">
 <input type="text" class="form-control" placeholder="เขียนความคิดเห็น" name="feedback">
 <span class="input-group-btn">
 <button class="btn btn-default" style="padding-left:40px; padding-right:40px;">ส่ง </button>
 </span>
 </div>
</div> <!-- /.col-10 -->
</div> <!-- /.row -->
</form>