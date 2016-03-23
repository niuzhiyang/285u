<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>用户中心_四川生态农业商城</title>
<link rel="stylesheet" type="text/css" href="indexs/css/base.css"/>

<link rel="stylesheet" type="text/css" href="indexs/css/login.css"/>

<script type="text/javascript" src="indexs/js/jquery.min.js"></script>

<script type="text/javascript" src="indexs/js/common.js"></script>

<script type="text/javascript" src="indexs/js/index.js"></script>

<link rel="stylesheet" href="indexs/css/confirm.css" />

    <script src="indexs/js/jquery.alerts.js" type="text/javascript"></script>

<!--[if IE 6]>

	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js"></script>

	<script type="text/javascript">

		DD_belatedPNG.fix('div, ul, img, li, input ,span,a');

	</script>

<![endif]-->

<script type="text/javascript">

$(function(){

	$(".login_more_ul li").bind("hover",function(){

		$(this).css({"background-position":-20+"px"});

	})

})

</script>

<script type="text/javascript">

window.onbeforeunload=function (){

     $.ajax({

     url:"stat.php",

     type: "POST",

     data:"access_url=",

     async:false

     });

}       

$(document).ready(function(){

    $("#AddFavorite").click(function(){

        jAlert('请使用浏览器快捷键Ctrl+D来完成收藏','温馨提示', function(r){obj.focus()});

    });

});



</script>

</head>

<body>



	<div class="main">

		<div class="main login_header">

			<div class="logo"><a href="index.php" title="四川生态农业商城"><img src="indexs/images/logo.png"/></a></div>

		</div>

		<div class="main login_box">

			<form style=" padding-top:20px;" id="formLogin" name="formLogin"  action="user.php" method="post">

			<div class="login_msg">

				<input type="hidden" name="act" value="act_login" />

				<input type="hidden" name="back_act" value="user.php" />

				<p class="font24 fontb login_titer">请您登录</p>

				<div class="user_input clearfix" style="margin-bottom: 10px;">

					<div class="img_user"></div>

					<input class="login_txt" name="username" id="username" type="text" placeholder="用户名/手机号/邮箱" onkeyup="if(this.value != ''){document.getElementById('username_notice').innerHTML=''}else{document.getElementById('username_notice').innerHTML='用户名不能为空'};" value="" />

					<font id="username_notice" style='color:#FF0000; line-height:20px;'></font>

				</div>

				<div class="pas_input clearfix" style="margin-bottom: 10px;">

					<div class="img_pas"></div>

					<input class="login_txt password" name="password" id="password" type="password" placeholder="密码" onkeyup="if(this.value != ''){document.getElementById('password_notice').innerHTML=''}else{document.getElementById('password_notice').innerHTML='密码不能为空'};" value="" size="20" maxlength="20"/>

					<font id="password_notice" style='color:#FF0000; line-height:20px;'></font>

				</div>

								<input class="font16 pointer login_btn" type="button" onclick="userLogin()" value="登&nbsp;&nbsp;录"/>

				<div class="font12 clearfix">

					<label class="fl labe_input">

							<input type="checkbox" value="1" name="remember" id="remember" />

							<span for="remember" style="height: 45px; line-height: 45px; display: inline-block;">记住用户名</span>

					</label>

					<div class="fr login_a">

						<a href="find_pwd.php">忘记密码</a>

						<span>&nbsp;|&nbsp;</span>

						<a class="red" href="user.php?act=register&back_act=user.php">免费注册</a>

					</div>

				</div>

				<div class="font12 clearfix" style="display:none">

					<label class="fl">&nbsp;合作登录账号</label>					

				</div>

				<div class="font12 clearfix" style="display:none">



				</div>

			</div>

			</form>

		</div>

		

		<div class="font12 center footer">

			<p>&copy; 2005-2016 四川生态农业商城 版权所有，并保留所有权利。</p>

			<p>四川省成都市崇州市三郎镇凤鸣村6组&nbsp;&nbsp;Tel: 400-1888-802&nbsp;&nbsp;ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备15066080号-1</a>&nbsp;&nbsp;</p>

		</div>

	</div>





	<style>

		.popup_title{

			font-family: 微软雅黑;

			font-size: 14px;

			font-weight: bold;

			text-align: left;

			line-height: 2.2em;

			color: #fff;

			background: #e46362;

			cursor: default;

			padding: 0em;

			margin: 0em;

			padding-left: 10px;

		}

		.popup_content{

			padding: 1.2em 1.75em;

			margin: 0em;

			background: #fff;

		}

		.popup_message{

			line-height: 1.4em;

			margin-left: 4em;

		}

		.popup_panel{

			text-align: center;

			margin: 1em 0em 0em 1em;

		}

		.popup_ok{

			background: #e46262;

			padding: 0.5em;

			margin-left: 0.5em;

			outline: none;

			color: #FFFFFF;

		}

		.popup_no{

			padding: 0.5em;

			margin-left: 0.5em;

		}

	</style>



	<div id="email_prompt"  style="display:none;padding: 5px !important;background: rgba(217, 217, 217, 0.5);COLOR: #000;position: fixed; z-index: 9999999; padding: 0px; margin: 0px; min-width: 310px;width: 610px; top: 174px; left: 791.5px;">

		<h1 class="popup_title">温馨提示<img id="confirmCloseButton" style="cursor:pointer;" src="indexs/images/alert09.png" onclick="$('#email_prompt').hide();" title="Close"></h1>

		<div class="popup_content" class="alert">

			<div class="popup_message">您还未通过邮箱验证，马上登陆邮箱完成认证<br/><span style="color: red" id="email"></span></div>

			<div class="popup_panel">

				<input type="button" id="send_email" value="发送验证邮件" class="popup_no">

			</div>

			<div>

			<span class="register_span">

			<span id="send_succ" style="display:none"><img src="indexs/images/u22.png" alt="发送成功">发送成功</span> <span id="sending" style="display:none"><img width="32" height="32" src="indexs/images/u16.gif" alt="发送中">发送中</span>

			</span>

			</div>

		</div>

	</div>



	<script type="text/javascript">

	var username = '';

	function userLogin(){

		username = $('#username').val();

		password = $('#password').val();

		if (username && password) {

			$.post('user.php?act=check_name', {email:username}, function(data){

				if (data.error == 0) {

					$('#formLogin').submit();

				} else {

					$('#email').html(username);

					$('#email_prompt').show();

				}



			}, 'json')

		}

	}

		$('#send_email').click(function(){

			$('#send_email').attr('disabled', true);

			$('#sending').show();$('#send_succ').hide();

			$.post('registr_guide.php?act=login_send_email', {email:username}, function(data){

				$('#sending').hide();

				$('#send_email').val('重新发送验证邮件').attr('disabled', false);

				if (data.error == 0) {

					$('#send_succ').show();

				} else {

					jAlert('发送失败')

				}

			}, 'json')

		});

	</script>

</body>

</html>