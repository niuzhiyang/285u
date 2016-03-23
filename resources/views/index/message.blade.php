<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta name="Generator" content="ECSHOP v2.7.3" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />

<meta name="Description" content="" />

<meta name="Description" content="" />



<title>留言板_四川生态农业商城</title>



<link rel="shortcut icon" href="indexs/favicon.ico" />

<link rel="icon" href="indexs/animated_favicon.gif" type="image/gif" />

<link href="indexs/css/handu_base.css" rel="stylesheet" type="text/css" />

<link href="indexs/css/handu_style.css" rel="stylesheet" type="text/css" />

<link href="indexs/css/handu_nivoslider.css" rel="stylesheet" type="text/css" />

<link href="indexs/css/handu_flex.css" rel="stylesheet" type="text/css" />

<link href="indexs/css/style.css" rel="stylesheet" type="text/css"/>



<script type="text/javascript" src="indexs/js/common.js"></script></head>

<body>

<link rel="stylesheet" href="indexs/css/base.css" />

<link rel="stylesheet" href="indexs/css/mystyle.css"/><link href="indexs/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="indexs/js/jquery.1.11.3.js"></script>

<script type="text/javascript" src="indexs/js/jquery.SuperSlide.2.1.1.js"></script>

<!-- <script type="text/javascript" src="indexs/js/jquery.min.js" ></script> -->

<script type="text/javascript" src="indexs/js/myscript.js"></script>

<script type="text/javascript" src="indexs/js/common.js" ></script>

<!--[if IE]>

        <script src="indexs/js/html5shiv.min.js"></script>

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

    .max {

        width: 100%;

        height: 100%;

        overflow: hidden;

        background-color: rgba(0,0,0,0.6);

        position: fixed;

        z-index: 9999;

        left: 0;

        top: 0;

        text-align: center;

        display: none;

    }

    .max .ss {

        width: 100%;

        height: 300px;

        position: absolute;

        z-index: 11111;

        top: 50%;

        margin-top: -180px;

    }

    .max .ss>div{

        width: 300px;

        height: 300px;

        display: inline-block;

        margin-right: 30px;

        font-size: 20px;

        background: #fff;

        color: #fff;

    }

    .max .ss>div p{

        line-height: 32px

    }

    .max .ss img {

        width: 280px;

        padding: 10px;

    }

    .gw ,.gr{

    width: 100px;

    height: 35px;

    float: right;

    background-color: #f9f9f9;

    cursor: pointer;

    margin-top: 45px;

    line-height: 35px;

    text-align: center;

    margin-left: 15px;

    border: 1px solid #efeded;

}

.zxrx{

	position: absolute;

    top: 10px;

    font-size: 20px;

    left: 600px;

    vertical-align: top;

    color: #0e913a;

}

.zxrx img{

	height: 20px;

	vertical-align: -3px;

	background-color: #0e913a;

}

.zxrx2{

        position: absolute;

    right: 50%;

    width: 250px;

    padding: 8px;

    top: 300px;

    background-color: rgba(15, 148, 59, 0.71);

    color: #fff;

    line-height: 25px;

    font-size: 25px;

    z-index: 99;

    border-radius: 15px;

    box-shadow: 1px 2px #183314;

}

</style>
@include('index.header')
<nav class="w-nav">
     @include('index.nav')
    </nav>
<div class="block clearfix"> 

<div class="microsoft_yahei font14 fontb">

 <style>

   #ur_here a,#ur_here code{

      font-family: '微软雅黑','宋体';

      font-size: 14px;

      font-weight: bold;

   }

 </style>

 <div id="ur_here" class="fontwy14b">

<img src="indexs/images/location.png" style="margin-right: 10px; margin-top: -5px;width:25px" /><a href=".">首页</a> <code>&gt;</code> 留言板 

</div>

</div>

<div class="blank5"></div>  

  <div class="AreaL">

    



<p class="fontb shop_classify font14 microsoft_yahei"><img src="" style="width:20px;height:20px"><span style="margin-left:5px"></span></p>

	<ul id="classify_ul">	  	</ul>

	<script type="text/javascript">

		$(function(){

			var Request = new Object();

			Request = GetRequest();

			var id,parentid;

			id = Request['id'];

			parentid = Request['parentid'];

			parent2id = Request['parent2id'];

			var cat_id = ;

			$("#a_"+parent2id).addClass("classify_hover");

			$("#div_"+parent2id).show();

			$("#aa_"+id).addClass("classify_hover");

		});

	</script>

	<Script language="javascript">

		/* 获取url参数 */

		function GetRequest() {

		   var url = location.search; //获取url中"?"符后的字串

		   var theRequest = new Object();

		   if (url.indexOf("?") != -1) {

			  var str = url.substr(1);

			  strs = str.split("&");

			  for(var i = 0; i < strs.length; i ++) {

				 theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);

			  }

		   }

		   return theRequest;

		}

	</Script>



    



    

    

  </div>

  

  

  <div class="AreaR">

  <div class="box">

     <div class="box_1">

      <h3><span>留言板</span></h3>

      <div class="boxCenterList">

        

    </div>

  </div>

</div>

<div class="blank5"></div>









  

<form name="selectPageForm" action="/message.php" method="get">





			<div class="paixu microsoft_yahei font13">

				<span class="paixu_page">

	总计 <b>0</b>  个记录&nbsp;&nbsp;

         <a href="javascript:void(0);">上一页</a>	       

                        							   

            <a href="javascript:void(0);">下一页</a></span>

			</div>

 





</form>

<script type="Text/Javascript" language="JavaScript">

<!--



function selectPage(sel)

{

  sel.form.submit();

}



//-->

</script>

  <div class="blank5"></div>

    <div class="box">

     <div class="box_1">

      <h3><span>我要留言</span></h3>

      <div class="boxCenterList">

          <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">

            <table width="100%" border="0" cellpadding="3">

              <tr>

                <td align="right">用户名</td>

                <td>

                               匿名用户                                </td>

              </tr>

              <tr>

                <td align="right">电子邮件地址</td>

                <td><input name="user_email" type="text" class="inputBg" size="20" value="" /></td>

              </tr>

              <tr>

                <td align="right">留言类型</td>

                <td><input name="msg_type" type="radio" value="0" checked="checked" />

                  留言                  <input type="radio" name="msg_type" value="1" />

                  投诉                  <input type="radio" name="msg_type" value="2" />

                  询问                  <input type="radio" name="msg_type" value="3" />

                  售后                  <input type="radio" name="msg_type" value="4" />

                  求购 </td>

              </tr>

              <tr>

                <td align="right">主题</td>

                <td><input name="msg_title" type="text" class="inputBg" size="30" /></td>

              </tr>

                          <tr>

                <td align="right" valign="top">留言内容</td>

                <td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" style="border:1px solid #ccc;"></textarea></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td><input type="hidden" name="act" value="act_add_message" />

                  <input type="submit" value="我要留言" class="bnt_blue_1" />

                </td>

              </tr>

            </table>

          </form>

        <script type="text/javascript">

                var msg_empty_email = "请输入您的电子邮件地址";

                var msg_error_email = "电子邮件地址格式不正确";

                var msg_title_empty = "留言标题为空";

                var msg_content_empty = "留言内容为空";

                var msg_captcha_empty = "验证码为空";

                var msg_title_limit = "留言标题不能超过200个字";

                

        /**

         * 提交留言信息

        */

        function submitMsgBoard(frm)

        {

            var msg = new Object;



             msg.user_email  = frm.elements['user_email'].value;

             msg.msg_title   = frm.elements['msg_title'].value;

             msg.msg_content = frm.elements['msg_content'].value;

             msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';



            var msg_err = '';



            if (msg.user_email.length > 0)

            {

               if (!(Utils.isEmail(msg.user_email)))

               {

                  msg_err += msg_error_email + '\n';

                }

             }

             else

             {

                  msg_err += msg_empty_email + '\n';

             }

            if (msg.msg_title.length == 0)

            {

                msg_err += msg_title_empty + '\n';

            }

            if (frm.elements['captcha'] && msg.captcha.length==0)

            {

                msg_err += msg_captcha_empty + '\n'

            }

            if (msg.msg_content.length == 0)

            {

                msg_err += msg_content_empty + '\n'

            }

            if (msg.msg_title.length > 200)

            {

                msg_err += msg_title_limit + '\n';

            }



            if (msg_err.length > 0)

            {

                jAlert(msg_err);

                return false;

            }

            else

            {

                return true;

            }

        }

        

        </script>

      </div>

     </div>

    </div>

  </div>

  

</div>





<style type="text/css">

.return{ position: fixed; right: 5px; bottom:40%;_position:absolute;

_bottom:auto;

_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))); _margin-bottom: 200px;}

.return a{display: block; width: 35px; height: 53px;}

.kf_user{background:url(indexs/images/kf.png) no-repeat center center #e68282; margin-top:2px;}

.kf_user_unset{background:url(indexs/images/kf_unset.png) no-repeat center center #e68282; margin-top:2px;}

.return_top1{background:url(indexs/images/cart_right.png) no-repeat center center #e68282;}

.return_top1 span{width:16px; height:16px; display:block; line-height:16px; font-size:8px; color:#FFF; background:#C00; text-align:center;}

.return_top2{background:url(indexs/images/top.png) no-repeat center center #e68282;}

*html{background-image:url(other/.com/about:blank); background-attachment:fixed;}

</style>

<script type="text/javascript">

$(function(){

	$('.return_top2').click(function(){$('html,body').animate({scrollTop:'0px'}, 800);});

})

</script>

<!--[if lte IE 6]>

		

	        <script type="text/javascript" src="indexs/js/DD_belatedPNG_0.0.8a.js"></script>

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
@include('index.footer')
<script type="text/javascript" src="indexs/js/osSlider.min.js" ></script>

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

    data:'act=visit&visit_times=76&lang=&domain=&path=&access_url=/message.php&access_domain=http://www.scstnysc.com&time=1458304802&session_id=1cd1be091774628f649f2140fa402908&user_id=0&goods_id=0&is_mobile=0',

    async:true

});

</script>

</body>

</html>

