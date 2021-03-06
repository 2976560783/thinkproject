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
			<strong><span class="icon-pencil-square-o"></span>修改学生信息</strong>
		</div>
		<div class="body-content">
			<form method="post" class="form-x" action="<?php echo U('Admin/editStudent');?>">
				<input type="hidden" name="sno" value="<?php echo ($user["sno"]); ?>"/>
				<div class="form-group">
					<div class="label">
						<label>姓名:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" id="nickname" name="nickname"
							placeholder="输入姓名" value="<?php echo ($user["truename"]); ?>"/>
						<span id="nick"></span>
					</div>
				</div>

				<div class="form-group">
					<div class="label">
						<label>密码:</label>
					</div>
					<div class="field">
						<input type="text" class="input w50" id="pwd" name="password"
							placeholder="登录密码" value="<?php echo ($user["password"]); ?>" required />
						<span id="spanpwd"></span>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label>籍贯:</label>
					</div>
					<div class="field" >
						<select name="s_province" id="s_province" style="width:93px;height:43px;">
							
						</select> 
						<select
							name="s_city" id="s_city" style="width:93px;height:43px;">
						</select> 
						<select name="s_county"
							id="s_county" style="width:93px;height:43px;">
							
						</select>
						<script class="resources library" src="/hc/Public/js/area.js"></script>
						<script>_init_area();</script>
						<div class="tips">
							<span style="color:red;"><strong>由于技术原因,修改时不能自动获取籍贯信息,但是可以进行修改操作</strong></span>
						</div>
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
								<option value="男" >男</option>
								<option value="女">女</option>
							</select>
						</div>
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
							<option value="电气与信息工程">电气与信息工程</option>
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
						<input type="text" class="input w50" name="major" value="<?php echo ($user["major"]); ?>" id="zhuanye" 
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
							修改</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
	$(function(){
		//系别
		var depart = '<?php echo $user["depart"];?>';
		$("#depart").find("option").each(function(){
			var text = $(this).text();
			if(depart == text){
				$(this).attr("selected", "selected");
			}
		});
		//性别
		var sex = '<?php echo $user["ssex"];?>';
		$("#sex").find("option").each(function(){
			var text = $(this).text();
			if (sex == text) {
				$(this).attr("selected", "selected");
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
} 
Gid('s_county').setAttribute('onchange','showArea()');
</script>
</body>
</html>