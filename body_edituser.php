<style>
.edit{
	margin-top:120px;
	margin-bottom:120px;
	margin-left:30px;
	margin-right:30px;
	
	
}

</style>
<div col-sm-12>
<div class="edit body">
<?php error_reporting(0);?>
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
 error_reporting(0);
}
?>

<h3  style="text-align:center">.เเก้ไขข้อมูลส่วนตัว</h3><br />
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group col-md-12" >
 <label for="nick">Nick Name</label>
 <input class="form-control" type='text' name='nick' value="<?=$userdata['nick']?>">
</div>
<div class="form-group col-md-6">
<label for="file">First Name</label>
<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Last Name</label>
<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">สที ชี่ อบ</label>
<input class="form-control" type='color' name='color' value="<?=$userdata["color"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Picture</label>
<input class="form-control" type='file' name='pic'>
</div> 
<button class="btn btn-primary" style="margin-left:30px; background:#B0B0FF;
 padding-right:40px; padding-left:40px; padding-top:8px; padding-bottom:8px;"> Save </button>


  <!---<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:30px;"> Save </button>

  <div class="modal fade" id="myModal" role="dialog"  style=" padding-top:16%; opacity:1 #C5C5C5;">
      <div class="modal-dialog modal-sm">
      
        <div class="modal-content" style="text-align:center;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h4>บันทึกเรียบร้อย</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>-->
</form>
</div>
</div>