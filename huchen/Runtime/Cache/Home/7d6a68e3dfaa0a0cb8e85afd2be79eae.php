<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>教师信息</title>  
    <link rel="stylesheet" href="/hc/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hc/Public/css/admin.css">
    <script src="/hc/Public/js/jquery.js"></script>
    <script src="/hc/Public/js/jquery.min.js"></script>
    <script src="/hc/Public/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 教师个人信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Teacher/info');?>">
      <div class="form-group">
        <div class="label">
          <label>姓名:</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="truename" value="<?php echo ($user["truename"]); ?>" readonly />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="phone" id="phone" value="<?php echo ($user["phone"]); ?>" />
          <div class="tips" id="divphone"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="qq" id="qq" value="<?php echo ($user["qq"]); ?>" />
          <div class="tips" id="divqq"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="email" class="input" name="email" id="email" value="<?php echo ($user["email"]); ?>" />
          <div class="tips" id="divemail"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?php echo ($user["taddr"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>  
              
      <div class="form-group">
        <div class="label">
          <label>个人简介：</label>
        </div>
        <div class="field">
          <textarea name="signature" class="input" style="height:120px;"><?php echo ($user["signature"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
$(function(){
	//验证手机号
	$("#phone").blur(function(e){
		var phone = $(this).val();
		var reg = /^1[34578]\d{9}$/;
		if (!phone.match(reg)) {
			$("#divphone").html("请您输入正确的手机号或者不输入");
			$("#divphone").css({"color":"red"})
		} else {
			$("#divphone").hide();
		}
	});
	//验证QQ
	$("#qq").blur(function(e){
		var qq = $(this).val();
		var reg = /^[1-9]\d{4,9}$/
		if (!qq.match(reg)) {
			$("#divqq").html("请您输入正确的QQ号或者不输入");
			$("#divqq").css({"color":"red"})
		} else {
			$("#divqq").hide();
		}
	});
	$("#email").blur(function(e){
		var email = $(this).val();
		var reg = /\w+[@]{1}\w+[.]\w+/ 
		if (!email.match(reg)) {
			$("#divemail").html("请您输入正确的邮箱或者不输入");
			$("#divemail").css({"color":"red"})
		} else {
			$("#divemail").hide();
		}
	});
});
</script>
</body>
</html>