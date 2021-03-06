<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/hc/Public/css/pintuer.css">
<link rel="stylesheet" href="/hc/Public/css/admin.css">
<script src="/hc/Public/js/jquery.js"></script>
<script src="/hc/Public/js/pintuer.js"></script>
</head>
<body>
	<div class="panel admin-panel">
		<div class="panel-head" id="add">
			<strong><span class="icon-pencil-square-o"></span>添加学生</strong>
		</div>
		<div class="body-content">
			<form method="post" class="form-x" action="<?php echo U('Teacher/addStudent');?>">
				<div class="form-group">
					<div class="label">
						<label>账号:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" id="name" placeholder="登录账号" name="name"
							required />
						<span id="spanname"></span>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>姓名:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" id="nickname" name="nickname"
							placeholder="输入姓名"/>
						<span id="nick"></span>
					</div>
				</div>

				<div class="form-group">
					<div class="label">
						<label>密码:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" id="pwd" name="password"
							placeholder="登录密码" required />
						<span id="spanpwd"></span>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>籍贯:</label>
					</div>
					<div class="field" >
						<select name="s_province" id="s_province" style="width:93px;height:43px;"></select> <select
							name="s_city" id="s_city" style="width:93px;height:43px;"></select> <select name="s_county"
							id="s_county" style="width:93px;height:43px;"></select>
						<script class="resources library" src="/hc/Public/js/area.js"></script>
						<script>_init_area();</script>
						<div class="tips"></div>
					</div>
				</div>

				<div class="clear"></div>
				<div class="form-group">
					<div class="label">
						<label>性别:</label>
					</div>
					<div class="field">
						<div class="field field-icon-right">
							<select name="sex" id="sex" class="input w50">
								<option value="男" selected>男</option>
								<option value="女">女</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>出生日期:</label>
					</div>
					<div class="field">
						<input type="date" class="input w50" name="birthday" id="birthday"
							min="1970-01-01" max="2017-10-01" value="" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>入校日期:</label>
					</div>
					<div class="field">
						<input type="date" class="input w50" name="entrytime" id="entrytime" 
							min="1970-01-01" max="2017-10-01"/>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>系别:</label>
					</div>
					<div class="field">
						<select name="depart" id="depart" class="input w50">
							<option value="土木建筑">土木建筑</option>
							<option value="机电工程">机电工程</option>
							<option value="电气与信息工程" selected>电气与信息工程</option>
							<option value="经济管理">经济管理</option>
							<option value="人文法学">人文法学</option>
							<option value="体育">体育</option>
							<option value="理学">理学</option>
						</select>
						<div class="tips"></div>
					</div>
				</div>

				<div class="form-group">
					<div class="label">
						<label>专业:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" name="major" id="zhuanye" 
						placeholder="填写专业" />
						<div class="tips"></div>
					</div>
				</div>

				<div class="form-group">
					<div class="label">
						<label></label>
					</div>
					<div class="field">
						<button class="button bg-main icon-check-square-o" type="submit">
							添加</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
	$(function(){
		//密码
		$("#pwd").blur(function(e){
			var pwd = $("#pwd").val();
			var reg = /^[\w]{6,12}$/
			if (!pwd.match(reg)) {
				$("#spanpwd").html("密码长度为6-12位");
				$("#spanpwd").css({"color":"red","float":"left","margin-left":"64px"});
			} else {
				$("#spanpwd").hide();
			}
		});
		//姓名
		$("#nickname").blur(function(e){
			var name = $(this).val();
			var reg = /^[\u4e00-\u9fa5]{2,5}$/i;
			if (!name.match(reg)) {
				$("#nick").html("输入2-5个汉字");
				$("#nick").css({"color":"red","float":"left","margin-left":"64px"});
			} else {
				$("#nick").hide();
			}
		});
		//重复密码
		$("#repeat").click(function(e){
			var repeat = $(this).val();
			var reg = /^[\w]{6,12}$/
			if (!repeat.match(reg)) {
				$("#spanpwd1").html("密码长度为6-12位");
				$("#spanpwd1").css({"color":"red","float":"left","margin-left":"64px"});
			} else if (repeat != $("#pwd").val()) {
				$("#spanpwd1").html("两次密码不一致");
				$("#spanpwd1").css({"color":"red","float":"left","margin-left":"64px"});
			} else {
				$("#spanpwd").hide();
			}
		});
		//账户
		$("#name").blur(function(e){
			var name = $(this).val();
			var reg = /^[a-zA-z0-9]{5,24}$/i;
			if (!name.match(reg)) {
				$("#spanname").html("以字母或数字开头的5-24位");
				$("#spanname").css({"color":"red","float":"left","margin-left":"64px"});
			} else if (name.match(reg)) {
				//验证用户名是否存在
				$.ajax({
					type:"post",
					url:"<?php echo U('Teacher/checkUser');?>",
					data:{"name":name},
					success(data) {
						if (data == 1) {
							$("#spanname").html("账户已经存在");
							$("#spanname").css({"color":"red","float":"left","margin-left":"64px"});
						} else {
							$("#spanname").hide();
						}
					}
				});
			} else {
				$("#spanname").hide();
			}
		});
		//专业
		$("#zhuanye").blur(function(e){
			var major = $(this).val();
			if (major == "") {
				$("#major").html("请您输入您的专业,谢谢!");
				$("#major").css({"color":"red","float":"left","margin-left":"64px"});
			} else {
				$("#major").hide();
			}
		});
	});
	</script>
	
	<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
	Gid('s_city').value + " - 县/区" +
	Gid('s_county').value + "</h3>"
} Gid('s_county').setAttribute('onchange','showArea()');
</script>
</body>
</html>