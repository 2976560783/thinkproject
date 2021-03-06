<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>注册页面</title>
    <link rel="stylesheet" href="/hc/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hc/Public/css/admin.css">
    <style>
    	.span {
    		font:left;
    		display: block;
    	}
    </style>
    <script src="/hc/Public/js/jquery.js"></script>
    <script src="/hc/Public/js/pintuer.js"></script>
    <script src="/hc/Public/js/area.js"></script>
    
    <script src="/hc/Public/js/jquery.min.js"></script>
</head>
<body style="background:url(/hc/Public/images/bg.jpg); background-size:cover">

<div class="container">
    <div class="line bouncein">
        <div class="xs6  xs3-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
            <form action="<?php echo U('Index/register');?>" method="post">
            <div class="panel loginbox reg" style="overflow:hidden;padding-bottom:20px;">
                <div class="text-center margin-big padding-big-top"><h1>用户注册</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
						<div class="field field-icon-right">
							<span class="span">角色</span>
							<select name="role" id="role" style="height:43px;font-size:14px;">
								<option value="学生">学生</option>
								<option value="教师">教师</option>
								<option value="管理员">管理员</option>
							</select>
							<span class="icon icon-role margin-small"></span>
						</div>
					</div>
                    <div class="form-group">
                        <div class="field field-icon-right">
							<span class="span">账号:</span>
                            <input type="text" class="input input-big" name="name" id="name" placeholder="登录账号" required/>
                            <span id="spanname"></span>
                        </div>
                    </div>
                    <div class="form-group" id="xingming">
                        <div class="field field-icon-right">
							<span class="span">姓名:</span>
                            <input type="text" class="input input-big" name="nickname" id="nickname" placeholder="输入姓名" />
                            <span id="nick"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
							<span class="span">密码:</span>
                            <input type="password" class="input input-big" name="password" id="pwd" placeholder="登录密码" required />
                            <span id="spanpwd"></span>
                        </div>
                    </div>
                    <div class="form-group">
                    	<div class="field field-icon-right">
                    		<span class="span">重复密码:</span>
                    		<input type="password" class="input input-big" name="repeat" id="repeat" placeholder="重复密码" required />
                    		<span id="spanpwd1"></span>
                    	</div>
                    </div>
                    <div class="form-group" id="jg">
                    	<div class="field field-icon-right area">
                    		<span class="span" style="width:20%">籍贯:</span>
							<select name="s_province" id="s_province"></select>
							<select name="s_city" id="s_city"></select>
							<select name="s_county" id="s_county"></select>
							<script class="resources library" src="/hc/Public/js/area.js"></script>
							<script>_init_area();</script>
                    	</div>
                    </div>
                    <div class="form-group" id="gender">
                    	<div class="field field-icon-right">
                    		<span class="span">性别:</span>
                    		<select name="sex" id="sex" style="height:43px;font-size:14px;">
                    			<option value="男" selected>男</option>
                    			<option value="女">女</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="form-group" id="date">
                    	<div class="field field-icon-right">
                    		<span class="span">出生日期:</span>
                    		<input type="date" class="input input-big" id="birthday" name="birthday"
                    			min="1970-01-01" max="2017-10-01"/>
                    		<span id="birth"></span>
                    	</div>
                    </div>
                    <div class="form-group" id="date1">
                    	<div class="field field-icon-right">
                    		<span class="span">入校日期:</span>
                    		<input type="date" class="input input-big" id="entrytime" name="entrytime"
                    		  min="1970-01-01" max="2017-10-01"/>
                    		<span id="entry"></span>
                    	</div>
                    </div>
                    <div class="form-group" id="xibie">
                    	<div class="field field-icon-right">
                    		<span class="span">系别:</span>
                    		<select name="depart" id="depart" style="height:43px;font-size:14px;">
                    			<option value="土木建筑">土木建筑</option>
                    			<option value="机电工程">机电工程</option>
                    			<option value="电气与信息工程" selected>电气与信息工程</option>
                    			<option value="经济管理">经济管理</option>
                    			<option value="人文法学">人文法学</option>
                    			<option value="体育">体育</option>
                    			<option value="理学">理学</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="form-group" id="student">
                    	<div class="field field-icon-right">
                    		<span class="span">专业:</span>
                    		<input type="text" class="input input-big" id="zhuanye" name="major" placeholder="填写专业" />
                    		<span id="major"></span>
                    	</div>
                    </div>
                </div>
                <div style="padding:30px;">
					<input type="submit" class="button button-block bg-main text-big input-big" value="注册" style="width:40%; display:block; float:left">
					<a href="<?php echo U('Index/index');?>" class="button button-block bg-main text-big input-big"
					 style="width:40%;float:right;text-align:center;">登录</a>
				</div>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
$(function() {
	$("#role").change(function() {
        var role = $(this).val();
        if (role == "教师") {
        	$("#student").css("display","none");
        	$("#date").css("display","block");
        	$("#date1").css("display","block");
        	$("#jg").css("display","block");
        	$("#xibie").css("display","block");
        	$("#gender").css("display","block");
        } else if (role == "管理员") {
        	$("#xingming").css("display","none");
        	$("#student").css("display","none");
        	$("#date").css("display","none");
        	$("#nickname").css("display","none");
        	$("#major").css("display","none");
        	$("#date1").css("display","none");
        	$("#jg").css("display","none");
        	$("#xibie").css("display","none");
        	$("#gender").css("display","none");
        } else if (role == "学生") {
        	$("#xingming").css("display","block");
        	$("#student").css("display","block");
        	$("#date").css("display","block");
        	$("#nickname").css("display","block");
        	$("#major").css("display","block");
        	$("#date1").css("display","block");
        	$("#jg").css("display","block");
        	$("#xibie").css("display","block");
        	$("#gender").css("display","block");
        }
    });
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
				url:"<?php echo U('Index/checkUser');?>",
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