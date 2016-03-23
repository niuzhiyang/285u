<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>购物流程_四川生态农业商城</title>
<link rel="stylesheet" type="text/css" href="indexs/css/base.css"/>
<link rel="stylesheet" type="text/css" href="indexs/css/orderConfirm.css">
<link rel="stylesheet" type="text/css" href="indexs/css/ordergift.css">
<link href="indexs/css/red.css" rel="stylesheet">
<script type="text/javascript" src="indexs/js/jquery.min.js"></script>
<script type="text/javascript" src="indexs/js/common.js"></script>
<script type="text/javascript" src="indexs/js/jquery.wallform.js"></script>
<script src="indexs/js/jquery.alerts.js" type="text/javascript"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('div, ul, img, li, input ,span,a'); 
	</script>
<![endif]-->
</head>
<script type="text/javascript" src="indexs/js/region.js"></script>
<script type="text/javascript" src="indexs/js/utils.js"></script><body>
<script type="text/javascript" src="indexs/js/common.js"></script>
<script type="text/javascript" src="indexs/js/shopping_flow.js"></script>
<link rel="stylesheet" href="indexs/css/base.css" />
<link rel="stylesheet" href="indexs/css/mystyle.css"/>
<link href="indexs/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="indexs/js/jquery.1.11.3.js"></script>
<script type="text/javascript" src="indexs/js/jquery.SuperSlide.2.1.1.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js" ></script> -->
<script type="text/javascript" src="indexs/js/myscript.js"></script>
<script type="text/javascript" src="indexs/js/common.js" ></script>
<!--[if IE]>
        <script src="js/html5shiv.min.js"></script>
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
	<link rel="stylesheet" href="indexs/css/myCar.css" />

	<div class="main main_box">

		<div class="car_titer">

			<ul class="car_titer_ul">

				<li class="checked"><span class="clof" style="line-height:45px;">1</span><br/><span class="ck_txt">我的购物车</span></li>

				<li><span style="line-height:45px;">2</span><br/><span>确认订单信息</span></li>

				<li><span style="line-height:45px;">3</span><br/><span >付款成功</span></li>

			</ul>

		</div>

		

		<form id="cartFrom" name="cartFrom" action="flow.php?step=checkout" method="post">

		<div class="main">

			<p class="font16">购物车列表</p>

			<table id="ck_table" class="" cellpadding="0" cellspacing="0">

				<tr>

					<th width="80" align="center"><label><input type="checkbox" name="" checked="checked" onclick="javascript:selectAll(this, 'checkboxes');" value="" />全选</label></th>

					<th width="350">商品</th>

										<th width="200">属性</th>

										<th width="150">本店价格</th>

					<th width="150">数量</th>

					<th width="120">小计</th>

					<th width="150">操作</th>

				</tr>

						<tr>

					<td colspan="6" style="text-align:center"><font class="fcart" id="shopping_money">购物车中暂无商品</font><br /><a href="index.php">返回购买</a></td>

					<td></td>

				</tr>

					</table>

			<script language="javascript" type="text/javascript">

			    	function cancelCartGoods(msg, url){

                	    jConfirm(msg,'温馨提示',function(r){

                                if(r){

                                    window.location.href=url;

                                }

                        });

                	}



				var old_number = 0;

                function goods_cut(rec_id){

					if(!document.getElementById("checkboxes_"+rec_id).checked){return false;}//没有选中不让变化

					var num_val=document.getElementById('goods_number_'+rec_id);

					var new_num=num_val.value;

					if(isNaN(new_num)){jAlert('请输入数字');return false}

					var Num = parseInt(new_num);

					old_number = Num;

					if(Num>1)Num=Num-1;

					num_val.value=Num;

					check_price(rec_id);

                }

                function goods_add(rec_id){

					if(!document.getElementById("checkboxes_"+rec_id).checked){return false;}//没有选中不让变化

					var num_val=document.getElementById('goods_number_'+rec_id);

					var new_num=num_val.value;

					 if(isNaN(new_num)){jAlert('请输入数字');return false}

					var Num = parseInt(new_num);

					old_number = Num;

					Num=Num+1;					

					num_val.value=Num;

					check_price(rec_id);

                }

				

				function goods_check(rec_id){

					if(!document.getElementById("checkboxes_"+rec_id).checked){return false;}//没有选中不让变化

					var num_val=document.getElementById('goods_number_'+rec_id);

					var new_num=num_val.value;

					if(isNaN(new_num) || new_num==''){jAlert('请输入数字');num_val.value = old_number;return false;}

					if(parseInt(new_num)<=0){jAlert('请输入大于0的数');num_val.value = old_number;return false;}

					check_price(rec_id);

				}

				

				function set_number(rec_id){

					var num_val=document.getElementById('goods_number_'+rec_id);

					var new_num=num_val.value;

					if(parseInt(new_num)>0){

						old_number = new_num;

					}

				}

				

				function check_price(rec_id){

					/* var num_val=document.getElementById('goods_number_'+rec_id);

					var goods_number = num_val.value;

					var rand = new Date().getTime();

                    Ajax.call('flow.php?step=update_number&rand='+rand+'', '&rec_id='+rec_id+'&goods_number='+ goods_number, update_number_result, 'POST', 'JSON'); */

					changeCheckPrice()

				}

 				function update_number_result(result){

                      if (result.error > 0){

                          jAlert(result.message);

                          jQuery('#goods_number_'+result.rec_id).val(old_number);

                      }else if (result.error == 0){

						 $('#subtotal_'+result.rec_id).html(result.subtotal);

                         $('#shopping_money').html(result.shopping_money);

                         $('#market_price_desc').html(result.market_price_desc);

                      }

                  }

				  

				function selectAll(obj, chk){

					if (chk == null){

						chk = 'checkboxes';

					}

					var elems = obj.form.getElementsByTagName("INPUT");

					for (var i=0; i < elems.length; i++){

						if (elems[i].name == chk || elems[i].name == chk + "[]"){

							elems[i].checked = obj.checked;

						}

					}

					changeCheckPrice();

				}





				function changeCheckPrice(){

					var rec_arr = new Array();

					var num_arr = new Array();

					var j = 0;



					var cartFrom = document.forms['cartFrom'];

					var elems = cartFrom.getElementsByTagName("INPUT");

					var formSubmitDisabled = true;

					for (var i=0; i < elems.length; i++){

						if (elems[i].name == 'checkboxes' || elems[i].name == "checkboxes[]"){

							if(elems[i].checked == true){

								formSubmitDisabled = false;

								rec_arr[j] = elems[i].value;

								num_arr[j] = document.getElementById("goods_number_" + rec_arr[j]).value;

								j++;

							}

						}

					}

					if(formSubmitDisabled == true && document.getElementById("formSubmit")){

						document.getElementById("formSubmit").disabled = true;

					}else if(document.getElementById("formSubmit")){

						document.getElementById("formSubmit").disabled = false;

					}

					/* 执行价格操作 */

					var rand = new Date().getTime();

					Ajax.call('flow.php?step=update_number2&rand='+rand+'', '&rec_id='+rec_arr+'&goods_number='+ num_arr, update_number_result2, 'POST', 'JSON');

				}

				function update_number_result2(result){

				      if (result.error > 0){

                          jAlert(result.message);

                          jQuery('#goods_number_'+result.rec_id).val(old_number);

                      }else if (result.error == 0){

						for(i=0; i<result.rec_id.length;i++){

							$('#subtotal_'+result.rec_id[i]).html(result.subtotal[i]);

						}

                         $('#shopping_money').html(result.shopping_money);

                         $('#market_price_desc').html(result.market_price_desc);

                         $('#return_goods_number').html(result.goods_number);

                         $('#return_goods_money').html(result.shopping_money2);



                         if(result.goods_number==0)

                         {

							$('#formSubmit').hide();

                         }else{

                         	$('#formSubmit').show();

                         }

                      }

                  }

				 //onload = changeCheckPrice();

            </script>

			<p class="shop_sum" style="display:none;">

								<font style="color:#e94b48; font-size:18px; font-weight:bold;" class="fcart" id="shopping_money">购物金额小计 ￥0.00</font>，<span id="market_price_desc">比市场价 ￥0.00 节省了 ￥0.00 </span>			</p>

			<p class="shop_sum">

				<span class="red" id="return_goods_number">0</span>件商品&nbsp;&nbsp;&nbsp;&nbsp;总计<span class="red" id="return_goods_money">￥0.00</span>

			</p>

			<p class="pay_btn">

				<input class="pointer btn2" type="button" onclick="window.location.href='index.php'" value="继续购物" />

				<input class="pointer btn1" name="formSubmit" id="formSubmit" type="submit" value="去结算" />

			</p>

		</div>

		</form>

		<div class="shop_more">

		  <p class="more_name">推荐商品</p>

		  <ul class="shop_list">

		  			<li>

				<img class="fl" src="indexs/images/381_thumb_G_1458282616375.png" width="100" height="100" alt="" />

				<div class="fl">

					<p class="shop_name"><a href="goods.php?id=381" title="【天府老农】阿胶糕500g/298元">【天府老农】阿胶糕500g/298元</a></p>

					<p class="red">￥298.00</p>

					<p><a class="people_sum" href="goods.php?id=381" title="【天府老农】阿胶糕500g/298元">(已有人评论)</a></p>

					<input class="add_pay pointer" type="button" name="add_to_cart" id="" onclick="addToCart(381,0,0)" value="加入购物车"/>

				</div>

			</li>

		  			<li>

				<img class="fl" src="indexs/images/261_thumb_G_1450944713383.jpg" width="100" height="100" alt="" />

				<div class="fl">

					<p class="shop_name"><a href="goods.php?id=261" title="日本樱花苗樱花">日本樱花苗樱花</a></p>

					<p class="red">￥32.00</p>

					<p><a class="people_sum" href="goods.php?id=261" title="日本樱花苗樱花">(已有人评论)</a></p>

					<input class="add_pay pointer" type="button" name="add_to_cart" id="" onclick="addToCart(261,0,0)" value="加入购物车"/>

				</div>

			</li>

		  			<li>

				<img class="fl" src="indexs/images/371_thumb_G_1458192643057.png" width="100" height="100" alt="" />

				<div class="fl">

					<p class="shop_name"><a href="goods.php?id=371" title="【天府老农  】枣夹核桃500g/袋">【天府老农  】枣夹核桃500g/袋</a></p>

					<p class="red">￥79.00</p>

					<p><a class="people_sum" href="goods.php?id=371" title="【天府老农  】枣夹核桃500g/袋">(已有人评论)</a></p>

					<input class="add_pay pointer" type="button" name="add_to_cart" id="" onclick="addToCart(371,0,0)" value="加入购物车"/>

				</div>

			</li>

		  		  </ul>

		</div>

	</div>

	<link href="indexs/css/cart.css" rel="stylesheet" type="text/css"  charset="utf-8">

	<div id="shopbox" class="shopbox">

		<h1>

		<a class="cl" href="javascript:catbox_hidden('shopbox');"></a>

		</h1>

		<h2>添加成功</h2>

		<div class="ibtn clearfix">

			<a href="flow.php" class="ibtn_red">去购物车结算</a>

			<a href="javascript:catbox_hidden('shopbox');" class="ibtn_shop">继续购物</a>

		</div>

		<div class="t_shop">

			<span class="t_span">推荐商品</span>

			<ul class="ul1 clearfix">

							</ul>

			<ul class="clearfix">

							</ul>

		</div>

	</div>

	<script type="text/javascript">

		$(function(){

			//点击加入购物车，图片飞入效果

			var oImg;

			$(".add_pay").click(function(){

				if(oImg){

					oImg.remove(); 

				}

				/* $(this).closest('li')从当前层开始查找，$(this).parents('li')从父层开始查找*/

				var shop_box=$(this).parents('li');

				var img=shop_box.find("img");

				var oImg=img.clone();

				var img_position=img.offset();

				var car_position=$(".return_top1").offset();

				var car_top=car_position.top+10;

				var car_left=car_position.left+10;

				

				function scroll(ev){

					var ev=ev || event;

						ev.preventDefault();

				}



				//FF阻止滚动条滚动

				if(document.addEventListener){

					document.addEventListener('DOMMouseScroll',scroll,false)

				}

				//IE阻止滚动条滚动

				$("body").attr({"onmousewheel":"return false"});

				

				//创建克隆的img图片

				oImg.addClass("cloneImg").css(img_position).appendTo("body");

				//动画参数

				car_position=$.extend(car_position,{left:car_left,top:car_top,height:5,width:5,opacity:0.5});

				$(oImg).animate(car_position,"slow",function(){

					oImg.remove();

					if(document.addEventListener){

						document.removeEventListener('DOMMouseScroll',scroll,false)

					}

					$("body").attr({"onmousewheel":"return true"});

				})

			})

		})

	

		window.onload = function(){

			var data = '';

			if(data=="1"){

				catbox_show("shopbox");

			}

		};

		/**

		 * 打开购物车div

		 */

		function catbox_show(elfm)

		{

			var cart_timecount=0;

			var cat_box = document.getElementById(elfm);

			cat_box.style.display='block';

			var aaaa = setInterval(function(){

				cart_timecount=cart_timecount+0.05;

				cat_box.style.opacity=cart_timecount;

				if(cart_timecount>=1)clearInterval(aaaa);

			},10)

		}



		/**

		 * 关闭购物车div

		 */

		function catbox_hidden(elfm)

		{

			var cart_timecount=0;

			var cat_box = document.getElementById(elfm);

			cat_box.style.display='none';

			var aaaa = setInterval(function(){

				cart_timecount=cart_timecount+0.05;

				cat_box.style.opacity=cart_timecount;

				if(cart_timecount>=1)clearInterval(aaaa);

			},10)

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

    data:'act=visit&visit_times=10&lang=&domain=&path=&access_url=/flow.php&access_domain=http://www.scstnysc.com&time=1458304478&session_id=1cd1be091774628f649f2140fa402908&user_id=0&goods_id=0&is_mobile=0',

    async:true

});

</script>

</body>

</html>

