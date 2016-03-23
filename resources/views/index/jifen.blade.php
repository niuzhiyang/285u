<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>积分商城_四川生态农业商城</title>
<!--[if IE 6]>
	<script type="text/javascript" src="indexs/js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('div, ul, img, li, input ,span,a'); 
	</script>
<![endif]-->
</head>
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
 
	<link rel="stylesheet" type="text/css" href="indexs/css/list.css"/>
	<link rel="stylesheet" type="text/css" href="indexs/css/exchange_list.css"/>
	<script type="text/javascript" src="indexs/js/list.js" ></script>
    <script src="indexs/js/jquery.alerts.js" type="text/javascript"></script>
	
	<div class="main">
		<div class="fontb" id="ur_here">
			<div class="microsoft_yahei font14 fontb">
 <style>
   #ur_here a,#ur_here code{
      font-family: '微软雅黑','宋体';
      font-size: 14px;
      font-weight: bold;
   }
 </style>
 <div id="ur_here" class="fontwy14b">
<img src="indexs/images/location.png" style="margin-right: 10px; margin-top: -5px;width:25px" /><a href=".">首页</a> <code>&gt;</code> <a href="exchange.php">积分商城</a> 
</div>
</div>
<div class="blank5"></div>		</div>
		<div class="shop_list">
			<div class="fl list_left">
											</div>
			
			<div class="fr list_right"> 
								<ul id="right_ul" class="font12">
				<form method="GET" class="sort" name="listform">
					<li><a class="nou ablock" href="/exchange.php?category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=&order=&is_discount=&is_post=0">默认排序</a></li>
					<li class="boder"><a class="nou ablock" href="/exchange.php?category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=goods_id&order=DESC&is_discount=&is_post=0">上架时间<img src="indexs/images/common_arrow.png" /></a></li>
					<li><a class="nou ablock" href="/exchange.php?category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=exchange_integral&order=DESC&is_discount=&is_post=0">积分<img src="indexs/images/up_arrow.png"></img></a></li>
					<li class="boder"><a class="nou ablock" href="/exchange.php?category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=salenum&order=DESC&is_discount=&is_post=0">销量<img src="indexs/images/common_arrow.png"></img></a></li>
					<li class="boder" style="border-width:0 1px 0 0"><a class="nou ablock" href="/exchange.php?category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=click_count&order=DESC&is_discount=&is_post=0">人气<img src="indexs/images/common_arrow.png"></img></a></li>
					<li class="money_input" id="price_filter" style="width:180px">
						<span id="price_filter_tag">
						<input class="money" type="text" name="" id="integral_min" value="0" />
						<span class="clo9 icon1">¥</span>
						<span class="clo9 icon2">¥</span>
						<span>-</span>  
						<input class="money" type="text" name="" id="integral_max" value="0" />
						</span>
						<input id="price_filter_btn" class="font12 pointer money_btn" type="button" value="确定" disabled="false" />
					</li>
					<li style="width:60px;visibility:hidden;">
						<input type="checkbox" onclick="window.location.href='/exchange.php?keywords=&action=&intro=&category=0&display=text&brand=&integral_min=0&integral_max=0&filter_attr=&page=1&sort=&order=&is_discount=&is_post=1'" name="is_post" id="is_post" value="" />包邮
					</li>
					<li style="width:100px;">
						总计<span>0</span>个商品
					</li>
					<li>
				<input type="button" onclick="" value="<" />
						<span id="now_page">1</span>
						/
						<span id="max_page">1</span>
						<input type="button" onclick="" value=">" />
					</li>
					
					<input type="hidden" name="keywords" value="" />
					<input type="hidden" name="action" value="" />
					<input type="hidden" name="intro" value="" />
					<input type="hidden" name="category" value="0" />
					<input type="hidden" name="display" value="text" id="display" />
					<input type="hidden" name="brand" value="" />
					<input type="hidden" name="integral_min" value="0" />
					<input type="hidden" name="integral_max" value="0" />
					<input type="hidden" name="filter_attr" value="" />
					<input type="hidden" name="page" value="1" />
					<input type="hidden" name="sort" value="" />
					<input type="hidden" name="order" value="" />
					<input type="hidden" name="is_discount" value="" />
					<input type="hidden" name="is_post" value="0" />
				</form>
				</ul>
				<div class="shop clearfix">
								</div>				
<form name="selectPageForm" action="/exchange.php" method="get">
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
	</div>
	
	<div style="clear:both"></div>
	<script type="text/javascript">
	$(function(){
		$(".shop_msg").hover(function(){
			$(this).children(".shop_box").addClass("hover").siblings().removeClass("hover");
		},function(){
			$(".shop_box").removeClass("hover");
		})
		$(".gallery .product").each(function(){
			$(this).find(".pro_imgli").eq(0).css("display","block").siblings().css("display","none");
		});
		$(".gallery .hd").each(function(index,obj){
			$(this).find("li").eq(0).addClass("on");
			$(this).find("li img").each(function(jdex,item){
				$(item).hoverDelay({
					hoverDuring:200,
					hoverEvent:function(){
						$(".gallery .product").eq(index).find(".pro_imgli").css("display","none");
						$(".gallery .product").eq(index).find(".pro_imgli").eq(jdex).css("display","block");
						$(item).parent().parent().addClass("on").siblings().removeClass("on");
					}
				});
			});
		});
		$("#price_filter_btn").attr("disabled",true);
		$(".money").focus(function(){
			if($(this).val().trim() == ''){
				this.value = 0;
			}
			$(".money_input").addClass("money_input_hover");
			$("#price_filter_btn").attr("disabled",false);
		}).blur(function(){
			if($(this).val().trim() == ''){
				this.value = 0;
			}
			$(".money_input").removeClass("money_input_hover");
		});
		$("#price_filter_btn").click(function(){
			if(!checkInput()){
				jAlert("请您输入正确的数字");
				return false;
			}
			$(".money_input").removeClass("money_input_hover");
			var integral_max = $("#integral_max").val();
			var integral_min = $("#integral_min").val();
			var url = window.location.href;
			if(url.indexOf("act=list") < 0){
				url += "?act=list"
			}
			if(url.match(/integral_max/g) && url.indexOf(/integral_min/g)){
				url = url.replace(/integral_max=\d+/,"integral_max="+integral_max);
				url = url.replace(/integral_min=\d+/,"integral_min="+integral_min);
			}else{
				url += "&integral_max="+integral_max+"&integral_min="+integral_min;
			}
			window.location.href = url;
		});
	});
	function checkInput(){
		var integral_max = parseFloat($("#integral_max").val());
		var integral_min = parseFloat($("#integral_min").val());
		if(isNaN(integral_max)||isNaN(integral_min)){
			return false;
		}
		if(integral_max == 0){
			if(integral_min == 0){
				return false;
			}
			return true;
		}
		if(integral_min>=integral_max){
			return false;
		}
		return true;
	}
	</script>
	
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
    data:'act=visit&visit_times=6&lang=&domain=&path=&access_url=/exchange.php&access_domain=http://www.scstnysc.com&time=1458302811&session_id=1cd1be091774628f649f2140fa402908&user_id=0&goods_id=0&is_mobile=0',
    async:true
});
</script>
</body>
</html>
