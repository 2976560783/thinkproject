<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/hc/Public/css/pintuer.css">
<link rel="stylesheet" href="/hc/Public/css/admin.css">
<script src="/hc/Public/js/jquery.js"></script>
<script src="/hc/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改成绩</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Teacher/editScore');?>"> 
      <input type="hidden" name="sno" value="<?php echo ($score['sno']); ?>" />
      <input type="hidden" name="cno" value="<?php echo ($score['cno']); ?>" />
      <div class="form-group">
        <div class="label">
          <label>成绩:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($score['score']); ?>" name="score" id="score" data-validate="required:请输入成绩" />
          <div class="tips" id="tip"></div>
        </div>
      </div>  
      
      <script>
      	$(function(){
      		$("#score").blur(function(){
      			$score = $("#score").val();
      			if ($score >= 1 && $score <= 150) {
      				return true;
      			} else if ($score !== '' ) {
      				$("#tip").css("color","red");
      				$("#tip").html("请输入1-150的数值");
      			}
      		});
      	});
      </script>  

      <div class="clear"></div>

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

</body></html>