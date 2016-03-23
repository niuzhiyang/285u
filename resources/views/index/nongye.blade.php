<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>农业资讯_四川生态农业商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
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
<img src="indexs/images/location.png" style="margin-right: 10px; margin-top: -5px;width:25px" /><a href=".">首页</a> <code>&gt;</code> <a href="article_cat.php?id=13">农业资讯</a> 
</div>
</div>
<div class="blank5"></div>  
  <div class="AreaL">
<img class="f_l" src="indexs/images/help_center_t.gif" />
<div id="help_center" class="cat_m">
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=38" title="新手指南">新手指南</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=39" title="验单签收">验单签收</a></dd>
  </dl>
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=42" title="运费说明">运费说明</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=43" title="包邮政策说明">包邮政策说明</a></dd>
  </dl>
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=44" title="积分说明">积分说明</a></dd>
  </dl>
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=6' title="购物须知">购物须知</a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=40" title="订单处理知识">订单处理知识</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=41" title="订单状态说明">订单状态说明</a></dd>
  </dl>
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=45" title="退货说明">退货说明</a></dd>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=46" title="退换货政策">退换货政策</a></dd>
  </dl>
<dl>
  <dt class="fontb font12 microsoft_yahei"><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
    <dd class="font12 microsoft_yahei"><a href="article.php?id=47" title="联系方式">联系方式</a></dd>
  </dl>
</div>
<img class="f_l" src="indexs/images/cat_b.gif" />
<div class="blank"></div><div class="blank"></div>
    
  </div>
  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
    <h3><span>文章列表</span></h3>
    <div class="boxCenterList">
                  <form action="" name="search_form" method="post" class="article_search">
        <input name="keywords" type="text" id="requirement" value="" class="inputBg" />
        <input name="id" type="hidden" value="13" />
        <input name="cur_url" id="cur_url" type="hidden" value="" />
        <input type="submit" value="立即搜索" class="bnt_blue_1" />
      </form>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
     
          </table>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="/article_cat.php" method="get">
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
    data:'act=visit&visit_times=7&lang=&domain=&path=&access_url=/article_cat.php?id=13&access_domain=http://www.scstnysc.com&time=1458302889&session_id=1cd1be091774628f649f2140fa402908&user_id=0&goods_id=0&is_mobile=0',
    async:true
});
</script>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
