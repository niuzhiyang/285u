<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>用户中心_四川生态农业商城</title>


<link rel="stylesheet" type="text/css" href="themes/hd/css/base.css"/>
<link rel="stylesheet" type="text/css" href="themes/hd/css/register.css"/>
<link rel="stylesheet" type="text/css" href="themes/hd/css/mystyle.css"/>
<script type="text/javascript" src="themes/hd/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/hd/js/common.js"></script>
<script src="themes/hd/js/jquery.alerts.js" type="text/javascript"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="themes/hd/js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('div, ul, img, li, input ,span,a'); 
	</script>
<![endif]-->
<script type="text/javascript">
window.onbeforeunload=function (){
     $.ajax({
     url:"stat.php",
     type: "POST",
     data:"access_url=",
     async:true
     });
}
$(document).ready(function(){
    $("#AddFavorite").click(function(){
        jAlert('请使用浏览器快捷键Ctrl+D来完成收藏','温馨提示', function(r){obj.focus()});
    });
});

</script>
<style>
input{font-size:12px}
::-webkit-input-placeholder {
color:#8D8D8D !important;
}
</style>
</head>
<body>

	<div class="register_main">
		

    <div class="top_nav">
        <div class="main" style="z-index:9999">
            <ul class="fl top_leftsidebar">
                <li id="top_leftsidebar_member_info"><span id="append_parent"></span>
欢迎光临四川生态农业商城</li>
                <li id="top_rightsidebar_member_info_link" class="memberclass"><span id="append_parent"></span>
<a href="user.php?act=login">[ 请您登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="user.php?act=register">免费注册 ]</a></li>
            </ul>
            <!-- <ul class="fl">
                <li>
                    <div class="denglubaidu" id="denglubaidu" style="width:100%;">
    <script type="text/javascript" id="bd_soc_login_boot" src=""></script>
    <script type="text/javascript">
    (function(){
    var t = new Date().getTime(),
      script = document.getElementById("bd_soc_login_boot"),
      redirect_uri = encodeURIComponent("http://kshop.abcd.com/denglu.php?dtype=baidu"),
      domid = "denglubaidu",
      src = "http://openapi.baidu.com/social/oauth/2.0/connect/login?redirect_uri=" + redirect_uri + "&domid=" + domid + "&client_type=web&response_type=code&media_types=sinaweibo%2Cqqdenglu%2Cbaidu%2Cqqweibo%2Ckaixin%2Crenren&size=-1&button_type=4&client_id=SH68XBbvgZsskQiHPcUZN4U5&view=embedded&t=" + t;
    script.src = src;
    })();
    </script>
                    </div>
                </li>
            </ul> -->
            <ul class="fr top_rightsidebar">
                <li class="my_shop">
                    <a href="user.php?act=default" style="display:block; height:35px;  width:80px; overflow:hidden;" title="我的四川生态农业商城" >我的四川生态农业商城</a>
                    <span class="soutline"></span>
                    <div class="hoverdiv">
                        <a href="user.php?act=order_list" class="noborder">已经买到的商品</a>
                        <a href="user.php?act=collection_list">我的收藏</a>
                    </div>
                </li>
                <li class="p_mobile"><a href="./mobile">手机商城</a><b></b></li>
                <li class="p_zxkf"><a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" target="_black">在线客服</a><b></b></li>
                <!-- <li class="p_home"><a href="http://www.ilanhai.cn">蓝海官网</a><b></b></li> -->
                <li class="p_rel">
                <a id="AddFavorite" rel="nofollow" href="javascript:;">收藏四川生态农业商城</a><b></b></li>
            </ul>
        </div>
    </div>
		<div class="register_header">
			<div style="margin:0px;" class="logo fl">
			    <div style="padding-left:5px;padding-right:5px;width:400px;">
			<a href="index.php" title="四川生态农业商城" width="272" height="67"><img src="themes/hd/images/logo.png" width="400" height="67" /></a>
			    </div>
			</div>
                    <img src="themes/hd/images/u12_line.png" width="1" height="54" id="u12" class="fl" />
                    <span class="r_span">欢迎注册</span>
		</div>
		<div class="register_box" style="height: 365px;">
			<form action="user.php" method="post" name="formUser" id="formUser" onsubmit="return register();">
			<div class="register_msg">
				<input name="act" type="hidden" value="act_register" >
				<input type="hidden" name="back_act" value="http://www.scstnysc.com/themes/hd/js/register_new.js" />
				<table width="100%"  border="0" align="left" cellpadding="5" cellspacing="0">
				<tr>
				    <td class="register_fiel">用户名：</td>
					<td><div class="register_txt"><input id="username" placeholder="请输入用户名/手机号/邮箱"  class="register_input" name="username" type="text" value="" /></div></td>
					<td><div id="username_notice"></div></td>
				</tr>
				<tr >
				    <td class="register_fiel">密码：</td>
					<td width=170;><div class="register_txt password0"><input id="password"  placeholder="请输入6-20位字符的密码"   name="password" class="register_input" type="password" value="" size="30" maxlength="30"/></div></td>
					<td><div id="password_notice"></div></td>
				</tr>
				<tr>
				    <td class="register_fiel">确认密码：</td>
					<td><div class="register_txt password"><input id="repassword" name="repassword"  placeholder="请再输入一次密码"   class="register_input" type="password"  value="" value="" size="30" maxlength="30"/></div></td>
					<td><div id="repassword_notice" ></div></td>
				</tr>
								<tr>
				    <td class="register_fiel">验证码：</td>
					<td><input class="fl register_txt register_yzm txt_code" type="text" id="captcha" name="captcha" value="" size="8" maxlength="8"/>
					<img class="fl pointer" id="captchaImg" src="other/other/captcha.php?290068089" style="vertical-align: middle;cursor: pointer; margin:0 0 0 4px; width:92px;margin-left: 5px;" onClick="this.src='captcha.php?'+Math.random()"/></td>
					<td><div id="captcha_notice" ></div></td>
				</tr>
				<script type="text/javascript">
              /*      $("#captcha").blur(function(){
                        $("#captcha_notice").attr("class", "error");
                        if(!checkCaptcha()){
                            var html = "<font style='color:#FF0000; line-height:20px; display:block; clear:both;'>验证码不能为空</font>";
                            $("#captcha_notice").text(html);
                            $("#captcha_notice").show();
                        }
                    });
				*/	
				</script>
				
				      
                

                <tr id="phoneCaptchaDiv">
                    <td class="register_fiel">短信验证码：</td>
                    <td>
                        <input id="phoneCaptcha" type="text"  name="phoneCaptcha" class="register_txt" style="background:none;width:90px">
                        <input id="sendCaptcha" type="button" style="margin-left: 8px;" value="获取短信验证码">
                    </td>
                    <td><div id="phoneCaptcha_notice" ></div></td>
                </tr>
				<tr>

                    <td colspan="3" style="padding-left:108px;">
                    <label class="agree_text">
                        <input type="checkbox" name="agreement" id="agree_box" value="1" />
                        我已阅读并接受《<a href="article.php?cat_id=-1" style="color:blue" target="_blank" title="四川生态农业商城用户协议">四川生态农业商城用户协议</a>》                    </label>
                    <div id="agree_notice"></div>
                    </td>
				</tr>

				<tr>
                    <td></td>
                    <td colspan="2">
                    <input class="font16 pointer register_btn" type="submit"  value="注&nbsp;&nbsp;册" />
                    <td>
				</tr>
				<tr>
                    <td></td>
                    <td colspan="2">
                    <div class="font12 clearfix">
                                                <div class="denglubaidu" id="denglubaidu" style="width:100%;">
                        <script type="text/javascript" id="bd_soc_login_boot" src=""></script>
                        <script type="text/javascript">
                        (function(){
                        var t = new Date().getTime(),
                          script = document.getElementById("bd_soc_login_boot"),
                          redirect_uri = encodeURIComponent("http://kshop.abcd.com/denglu.php?dtype=baidu"),
                          domid = "denglubaidu",
                          src = "http://openapi.baidu.com/social/oauth/2.0/connect/login?redirect_uri=" + redirect_uri + "&domid=" + domid + "&client_type=web&response_type=code&media_types=sinaweibo%2Cqqdenglu%2Cbaidu%2Cqqweibo%2Ckaixin%2Crenren&size=-1&button_type=4&client_id=SH68XBbvgZsskQiHPcUZN4U5&view=embedded&t=" + t;
                        script.src = src;
                        })();
                        </script>
                        </div>
                                            </div>
                    </td>
				</tr>
				</table>
			</div>
			</form>
            <script type="text/javascript" src="themes/hd/js/register_new.js?12345"></script>

                <div id="u15">
                    <img src="themes/hd/images/u12_line.png" width="1" height="300" />
                </div>

            <div class="login fr">
            我有账号，现在就
            <a href="user.php?act=login"><div class="login_btn">登陆</div></a>
            </div>
		</div>
</div>


<style type="text/css">
.return{ position: fixed; right: 5px; bottom:40%;_position:absolute;
_bottom:auto;
_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))); _margin-bottom: 200px;}
.return a{display: block; width: 35px; height: 53px;}
.kf_user{background:url(themes/hd/images/kf.png) no-repeat center center #e68282; margin-top:2px;}
.kf_user_unset{background:url(themes/hd/images/image-icon/kf_unset.png) no-repeat center center #e68282; margin-top:2px;}
.return_top1{background:url(themes/hd/images/image-icon/cart_right.png) no-repeat center center #e68282;}
.return_top1 span{width:16px; height:16px; display:block; line-height:16px; font-size:8px; color:#FFF; background:#C00; text-align:center;}
.return_top2{background:url(themes/hd/images/top.png) no-repeat center center #e68282;}
*html{background-image:url(about:blank); background-attachment:fixed;}
</style>
<script type="text/javascript">
$(function(){
	$('.return_top2').click(function(){$('html,body').animate({scrollTop:'0px'}, 800);});
})
</script>
<!--[if lte IE 6]>
		
	        <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js"></script>
	        <script type="text/javascript">
	        	DD_belatedPNG.fix('.return a');
	        </script>
<![endif]-->
	<div class="return">
		<a href="flow.php" style="margin-top: 2px;" class="return_top1"><span id="mini_cart_number2"></span></a>
	     		<a href="javascript:;" class="kf_user_unset" onclick="javascript:jAlert('亲，客服不在，请您留言');window.location.href='./user.php?act=message_list';"> </a>
	     		<a href="javascript:;" style="margin-top: 2px;" class="return_top2"> </a>
	</div><style>
	.footer{
    width: 100%;
    overflow: hidden;
}

.footer .fm{
    width: 1200px;
    margin: auto;
    overflow: hidden;
    padding-top: 40px;
    padding-bottom: 30px;
}
.fm .service{
    width: 200px;
    text-align: center;
    font-family: "Microsoft YaHei";
    line-height: 30px;
    font-size: 14px;
}
.fm .service span{
    font-family: "Simsun";
    font-size: 20px;
}
.fm .service .pic{
    margin-top: 55px;
    text-align: center;
}
.fm .share{
    width: 200px;
    text-align: center;
    font-family: "Microsoft YaHei";
    font-size: 14px;
    line-height: 25px;
    color: #b1895d;
}

.footer .fc li{
    float: left;
    width: 200px;
    text-align: center;
    font-family: "Microsoft YaHei";
}
.footer .fc li p{
    font-size: 18px;
    margin-bottom: 10px;
}
.footer .fc li a{
    display:block;
    line-height: 20px;
}
.footer .ff{
    width: 100%;
    line-height: 25px;
    margin:50px auto;
    letter-spacing: 1px;
    font-size: 14px;
    text-align: center;
    font-family: "Simsun";
    color: #505050;
}
.footer .ff .pic{
    margin-top: 20px;
}
.footer .bz img{
	margin:80px 0 23px -108px;
}
.fmbox{
	width: 100%;
	background-color: #0f923a;
	color: #FFFFFF;
}
</style>
<div class="footer">
    <div class="bz mid_12"><img src="themes/hd/images/adbot_03.jpg" alt=""/></div>
    <div class="fmbox">
    	<div class="fm">
	        <div class="service left">
	            服务电话：<br><span>400-1888-802</span>
	            <p>(7x24小时)</p>
	        </div>
	        <div class="share right">
	            <img style="width:120px;" src="/themes/hd/images/qr.jpg" alt=""><br>
				<span>扫一扫，关注我们哟</span>  
	        </div>
	        <div class="fc">
	            <ul>
	                	                    	                        <li>
	                            <p><a href="article_cat.php?id=5" class="title">新手上路 </a></p>
	                            	                                	                                <a href="article.php?id=38">新手指南</a>
	                                	                            	                                	                                <a href="article.php?id=39">验单签收</a>
	                                	                            	                        </li>
	                    	                	                    	                        <li>
	                            <p><a href="article_cat.php?id=7" class="title">配送与支付 </a></p>
	                            	                                	                                <a href="article.php?id=17">支付方式说明</a>
	                                	                            	                                	                                <a href="article.php?id=42">运费说明</a>
	                                	                            	                                	                                <a href="article.php?id=43">包邮政策说明</a>
	                                	                            	                        </li>
	                    	                	                    	                        <li>
	                            <p><a href="article_cat.php?id=10" class="title">会员中心</a></p>
	                            	                                	                                <a href="article.php?id=19">我的收藏</a>
	                                	                            	                                	                                <a href="article.php?id=20">我的订单</a>
	                                	                            	                                	                                <a href="article.php?id=44">积分说明</a>
	                                	                            	                        </li>
	                    	                	                    	                        <li>
	                            <p><a href="article_cat.php?id=6" class="title">购物须知</a></p>
	                            	                                	                                <a href="article.php?id=40">订单处理知识</a>
	                                	                            	                                	                                <a href="article.php?id=41">订单状态说明</a>
	                                	                            	                        </li>
	                    	                	                    	                	                    	                     
	                
	            </ul>
	        </div>
	    </div>
    </div>
    

            
    <div class="ff">
        &copy; 2005-2016 四川生态农业商城 版权所有，并保留所有权利。<br>
    e-mail：   ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备15066080号-1</a>   技术支持：蓝海基业<br>
同步访问域名：四川生态农业商城.com.cn.net.中国 
        <div class="pic">
            <img src="themes/hd/images/ft1.png"/>
            <a href="https://ss.knet.cn/verifyseal.dll?sn=e16011851010062225bagw000000&comefrom=trust" target="_blank"><img src="themes/hd/images/ft2.png"/></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="themes/hd/js/osSlider.min.js" ></script>
<script type="text/javascript">
    window.onload=function(){var slider = new osSlider({ //开始创建效果
        pNode:'.slider', //容器的选择器 必填
        cNode:'.slider-main li', //轮播体的选择器 必填
        speed:2000, //速度 默认3000 可不填写
        autoPlay:true //是否自动播放 默认true 可不填写
    });}
</script>
<script type="text/javascript">
    function check_del(msg,url){
        jConfirm(msg,'温馨提示',function(r){
            if(r){
                window.location.href=url;
            }
        });
    }
/*网站统计*/

  	$("#wxcm").hover(function(){
  		/*$(".sewm").slideToggle();*/
  		$(".max").fadeIn();
  	});
  	$(".max").click(function(){
  		/*$(".sewm").slideToggle();*/
  		$(this).fadeOut();
  	});

$.ajax({
    url:"stat.php",
    type: "post",
    data:'act=visit&visit_times=55&lang=&domain=&path=&access_url=/user.php?act=register&back_act=http://www.scstnysc.com/themes/hd/js/register_new.js&access_domain=http://www.scstnysc.com&time=1458304722&session_id=1cd1be091774628f649f2140fa402908&user_id=0&goods_id=0&is_mobile=0',
    async:true
});
</script>

</body>
</html>