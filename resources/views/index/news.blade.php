<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta name="Generator" content="ECSHOP v2.7.3" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />

<meta name="Description" content="" />



<title>商品搜索_四川生态农业商城</title>

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

	<script type="text/javascript" src="indexs/js/list.js" ></script>



	

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

<img src="indexs/images/location.png" style="margin-right: 10px; margin-top: -5px;width:25px" /><a href=".">首页</a> <code>&gt;</code> 商品搜索 

</div>

</div>

<div class="blank5"></div>		</div>

		<div class="shop_list">

			<div class="fl list_right">

				<ul id="right_ul" class="font12"> 

				<form method="GET" class="sort" name="listform">

					<li><a class="nou ablock" href="search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=&order=&is_discount=0&is_post=0">默认排序</a></li>

					<li class="boder"><a class="nou ablock" href="search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=goods_id&order=DESC&is_discount=0&is_post=0">上架时间<img src="indexs/images/common_arrow.png" /></a></li>

					<li><a class="nou ablock" href="search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=shop_price&order=DESC&is_discount=0&is_post=0">价格<img src="indexs/images/up_arrow.png" /></a></li>

					<li class="boder"><a class="nou ablock" href="search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=salenum&order=DESC&is_discount=0&is_post=0">销量<img src="indexs/images/common_arrow.png" /></a></li>

					<li class="boder" style="border-width:0 1px 0 0"><a class="nou ablock" href="search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=click_count&order=DESC&is_discount=0&is_post=0">人气<img src="indexs/images/common_arrow.png" /></a></li>

					<li class="money_input boder" id="price_filter" style="width:180px">

						<span id="price_filter_tag">

						<input class="money" type="text" name="" id="minprice" value="0" />

						<span class="clo9 icon1">¥</span>

						<span class="clo9 icon2">¥</span>

						<span>-</span>  

						<input class="money" type="text" name="" id="maxprice" value="0" />

						</span>

						<input id="price_filter_btn" class="font12 pointer money_btn" type="button" value="确定" disabled="false" />

					</li>

					<li class="boder" style="width:160px;">

						<input type="checkbox" onclick="window.location.href='search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=shop_price&order=ASC&is_discount=1&is_post=0'" name="is_discount" id="is_discount" value="" />

						折扣商品

					

										

						<input type="checkbox" onclick="window.location.href='search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=shop_price&order=ASC&is_discount=0&is_post=1'" name="is_post" id="is_post" value="" />包邮

					

										</li>

					<li style="width:90px; margin-left:60px;" >

						总计<span>118</span>个商品

					</li>

					

					<li>

						<input type="button" onclick="" value="<" />

						<span id="now_page">1</span>

						/

						<span id="max_page">8</span>

						<input type="button" onclick="window.location.href='search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=2'" value=">" />

					</li>



					<input type="hidden" name="keywords" value="" />

					<input type="hidden" name="action" value="" />

					<input type="hidden" name="intro" value="" />

					<input type="hidden" name="category" value="0" />

					<input type="hidden" name="display" value="text" id="display" />

					<input type="hidden" name="brand" value="" />

					<input type="hidden" name="price_min" value="0" />

					<input type="hidden" name="price_max" value="0" />

					<input type="hidden" name="filter_attr" value="" />

					<input type="hidden" name="page" value="1" />

					<input type="hidden" name="sort" value="shop_price" />

					<input type="hidden" name="order" value="ASC" />



					<input type="hidden" name="is_discount" value="0" />

					<input type="hidden" name="is_post" value="0" />



				</form>

				</ul>



				<div class="shop clearfix">

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=264" title="" class="shop_img_show" target="_blank"><img src="indexs/images/264_G_1450945332809.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/264_P_1450945332694.jpg" src="indexs/images/264_thumb_P_1450945332590.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/264_P_1450945332335.jpg" src="indexs/images/264_thumb_P_1450945332785.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/264_P_1450945332452.jpg" src="indexs/images/264_thumb_P_1450945332717.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.00" style="text-decoration:line-through">

                                

                                ￥0.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=264" target="_blank" title="日本樱花苗樱花">日本樱花苗樱花</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('264');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=271" title="" class="shop_img_show" target="_blank"><img src="indexs/images/271_G_1450947149242.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/271_P_1450947149644.jpg" src="indexs/images/271_thumb_P_1450947149757.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/271_P_1450947149623.jpg" src="indexs/images/271_thumb_P_1450947149954.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/271_P_1450947149460.jpg" src="indexs/images/271_thumb_P_1450947149834.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/271_P_1450947149128.jpg" src="indexs/images/271_thumb_P_1450947149651.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.00" style="text-decoration:line-through">

                                

                                ￥0.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=271" target="_blank" title="日本樱花苗樱花">日本樱花苗樱花</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('271');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=272" title="" class="shop_img_show" target="_blank"><img src="indexs/images/272_G_1450947150715.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/272_P_1450947150128.jpg" src="indexs/images/272_thumb_P_1450947150583.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/272_P_1450947150793.jpg" src="indexs/images/272_thumb_P_1450947150211.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/272_P_1450947150172.jpg" src="indexs/images/272_thumb_P_1450947150971.jpg" width="48" height="48"/>

																 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/272_P_1450947150987.jpg" src="indexs/images/272_thumb_P_1450947150489.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.00" style="text-decoration:line-through">

                                

                                ￥0.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=272" target="_blank" title="日本樱花苗樱花">日本樱花苗樱花</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('272');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=316" title="" class="shop_img_show" target="_blank"><img src="indexs/images/316_G_1451350711589.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/316_P_1451350711480.jpg" src="indexs/images/316_thumb_P_1451350711872.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.00" style="text-decoration:line-through">

                                

                                ￥0.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=316" target="_blank" title="园林绿化">园林绿化</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('316');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=317" title="" class="shop_img_show" target="_blank"><img src="indexs/images/317_G_1451350984336.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/317_P_1451350984874.jpg" src="indexs/images/317_thumb_P_1451350984516.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥1650.00" style="text-decoration:line-through">

                                

                                ￥1650.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=317" target="_blank" title="园林绿化">园林绿化</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('317');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=343" title="" class="shop_img_show" target="_blank"><img src="indexs/images/343_G_1451360847275.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/343_P_1451360847300.jpg" src="indexs/images/343_thumb_P_1451360847539.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥0.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.00" style="text-decoration:line-through">

                                

                                ￥0.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=343" target="_blank" title="家庭农场">家庭农场</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('343');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=299" title="" class="shop_img_show" target="_blank"><img src="indexs/images/299_G_1451286062581.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/299_P_1451286062217.jpg" src="indexs/images/299_thumb_P_1451286062366.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥5.80                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥0.01" style="text-decoration:line-through">

                                

                                ￥0.01                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=299" target="_blank" title="会理石榴">会理石榴</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('299');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=310" title="" class="shop_img_show" target="_blank"><img src="indexs/images/310_G_1451289587027.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/310_P_1451289587437.jpg" src="indexs/images/310_thumb_P_1451289587713.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥5.60                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥6.72" style="text-decoration:line-through">

                                

                                ￥6.72                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=310" target="_blank" title="四川泡菜">四川泡菜</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('310');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=304" title="" class="shop_img_show" target="_blank"><img src="indexs/images/304_G_1451287794393.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/304_P_1451287794787.jpg" src="indexs/images/304_thumb_P_1451287794812.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥5.90                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥7.08" style="text-decoration:line-through">

                                

                                ￥7.08                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=304" target="_blank" title="自贡红橘">自贡红橘</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('304');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=300" title="" class="shop_img_show" target="_blank"><img src="indexs/images/300_G_1451286211288.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/300_P_1451286211805.jpg" src="indexs/images/300_thumb_P_1451286211909.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥6.90                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥10.56" style="text-decoration:line-through">

                                

                                ￥10.56                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=300" target="_blank" title="盐源苹果">盐源苹果</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('300');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=298" title="" class="shop_img_show" target="_blank"><img src="indexs/images/298_G_1451285926793.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/298_P_1451285926057.jpg" src="indexs/images/298_thumb_P_1451285926720.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥9.90                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥11.88" style="text-decoration:line-through">

                                

                                ￥11.88                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=298" target="_blank" title="马湖莼菜">马湖莼菜</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('298');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=314" title="" class="shop_img_show" target="_blank"><img src="indexs/images/314_G_1451289984832.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/314_P_1451289984504.jpg" src="indexs/images/314_thumb_P_1451289984144.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥12.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥14.39" style="text-decoration:line-through">

                                

                                ￥14.39                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=314" target="_blank" title="糖油果子">糖油果子</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('314');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=302" title="" class="shop_img_show" target="_blank"><img src="indexs/images/302_G_1451287091398.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/302_P_1451287091214.jpg" src="indexs/images/302_thumb_P_1451287091532.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥13.50                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥16.20" style="text-decoration:line-through">

                                

                                ￥16.20                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=302" target="_blank" title="雷波脐橙">雷波脐橙</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('302');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=295" title="" class="shop_img_show" target="_blank"><img src="indexs/images/295_G_1451282257278.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/295_P_1451282257343.jpg" src="indexs/images/295_thumb_P_1451282257657.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥15.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥18.00" style="text-decoration:line-through">

                                

                                ￥18.00                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=295" target="_blank" title="花生">花生</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('295');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

									<div class="shop_msg">

						<div class="shop_box">

							<div class="shop_img">

								<a href="goods.php?id=287" title="" class="shop_img_show" target="_blank"><img src="indexs/images/287_G_1451274571928.jpg" alt="" width="220" height="220"/></a>

							</div>

							<div class="shop_img_list">

								 

																<img title="" rel="http://www.scstnysc.com/indexs/images/201512/goods_img/287_P_1451274571411.jpg" src="indexs/images/287_thumb_P_1451274571063.jpg" width="48" height="48"/>

																							</div>

							<p class="shop_parce">

								<span class="fontb font15 microsoft_yahei"  style="color:#c43131;">

                                                         ￥16.00                               

                             </span>

								<del class="microsoft_yahei font12" title="市场价 ￥19.20" style="text-decoration:line-through">

                                

                                ￥19.20                                

                                </del>

							</p>

							<p class="shop_name microsoft_yahei font12"><a href="goods.php?id=287" target="_blank" title="瓜子">瓜子</a></p>

							<ul class="shop_sum_ul">

								<li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">月销量</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#c78a53">0</span>

                                    </div>

                                </li>

                                <li class="shop_unmber">

                                    <div style="margin-top:10px">

                                    <span class="microsoft_yahei font12">评论</span>&nbsp;<span class="microsoft_yahei font12 fontb" style="color:#4e6ab3;">0</span>

                                    </div>

                                </li>

								<li>

                       					<div style="margin-top:10px" onclick="myAddFav('287');">

                          					<img class="img" src="indexs/images/u113.png" alt="u52_line"/>收藏

                       					</div>

                                </li>

							</ul>

						</div>

					</div>

								</div>

				

<form name="selectPageForm" action="/search.php" method="get">





			<div class="paixu microsoft_yahei font13">

				<span class="paixu_page">

	总计 <b>118</b>  个记录&nbsp;&nbsp;

         <a href="javascript:void(0);">上一页</a>
                                                                                                                <a class="page00">1</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=2">2</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=3">3</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=4">4</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=5">5</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=6">6</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=7">7</a>

                                                                                                                      <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=8">8</a>

                                                                                      							   

            <a href="search.php?keywords=&category=0&brand=0&sort=shop_price&order=ASC&price_min=0&price_max=0&action=&intro=&goods_type=0&sc_ds=0&outstock=0&is_discount=0&is_post=0&page=2">下一页</a></span>

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

			var price_min = $("#minprice").val();

			var price_max = $("#maxprice").val();

			//var url = window.location.href;由于php中进行了 base64encode 此处加新的参数加不进去，因此只能重构url

			var url = "search.php?keywords=&action=&intro=&category=0&display=text&brand=&price_min=0&price_max=0&filter_attr=&page=1&sort=shop_price&order=ASC&is_discount=0&is_post=0";

			if(url.match(/price_min/g)&&url.indexOf(/price_max/g)){

				url = url.replace(/price_min=\d+/,"price_min="+price_min);

				url = url.replace(/price_max=\d+/,"price_max="+price_max);

			}else{

				url += "&price_min="+price_min+"&price_max="+price_max;

			}

			window.location.href = url;

		});

	});



	function checkInput(){

		var minprice = parseFloat($("#minprice").val());

		var maxprice = parseFloat($("#maxprice").val());

		if(isNaN(minprice)||isNaN(maxprice)){

			return false;

		}

		if(maxprice == 0){

			if(minprice == 0){

				return false;

			}

			return true;

		}

		if(minprice>=maxprice){

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

    data:'',

    async:true

});

</script>



	<link href="indexs/css/wb_Css.css" type="text/css" rel="stylesheet"/>



    <div id="LoginBox" class="Show_K">

    	<div class="Show_Box">

        	<div class="Show_Top">

            	<div class="Show_Top1">蓝海商城</div>

                <div class="Show_Top2">X</div>

            </div>

        	<div class="Show_Main">

            	<div class="Login1">亲，请登陆！</div>

            	<div class="Login2">用户名/手机号/邮箱：</div>

            	<div class="Login3">

                	<input id="username" class="Login_Text" type="text" placeholder="输入用户名/手机号/邮箱" value="" maxlength="50" />

                </div>

            	<div class="Login2">密码：</div>

            	<div class="Login3">

                	<input id="password" class="Login_Text" type="password" placeholder="密码" value="" maxlength="20" />

                </div>

                                <input class="Login_Submit" type="button" value="登录" onclick="myCheckLogin()" />

                <div class="Login4">

                    <input type="hidden" id="goods_id" value="" />

                	<input class="Login4_1" type="checkbox" id="remember" value=1 />

                    <div class="Login4_2">记住用户名</div>

                    <div class="Login4_3">

                    	<a class="Login4_3_Link" href="user.php?act=register">免费注册</a>

                        <div class="Login4_3_FG">|</div>

                    	<a class="Login4_3_Link" href="find_pwd.php">忘记密码</a>

                    </div>

                </div>

                <div class="Login5">

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

            </div>

        	<div class="Show_Box_BG"></div>

        </div>

    	<div class="Show_BG"></div>

    </div>



    <div id="SCBox" class="Show_K">

    	<div class="Show_Box">

        	<div class="Show_Top">

            	<div class="Show_Top1">蓝海商城</div>

                <div class="Show_Top2">X</div>

            </div>

        	<div class="Show_Main">

            	<div class="SCBox1">

                	<img class="SCBox1_1" src="indexs/images/SCBox1_1.png" align="top" />成功加入收藏夹

                </div>

            	<div class="SCBox2">

                	<a class="SCBox2_1" href="user.php?act=collection_list">查看收藏夹</a>

                	<a class="SCBox2_1" href="javascript:closeShow('SCBox');">继续购物</a>

                </div>

            </div>

        	<div class="Show_Box_BG"></div>

        </div>

    	<div class="Show_BG"></div>

    </div>

     <script type="text/javascript">

            $(

                function(){

                    $(".Show_BG").fadeTo(0,0.1);

                    $(".Show_Box_BG").fadeTo(0,0.8);



                    $("#LoginBox .Show_Top2").click(function(){closeShow("LoginBox");});

                    $("#SCBox .Show_Top2").click(function(){closeShow("SCBox");});



                }

            );

            function myCheckLogin(){

                var postdata="";

                if($('#LoginBox #username').val()==""){

                    $('#LoginBox .Show_Main .Login1').html('<span style="color:red">用户名/手机号/邮箱不能为空</span>');

                    $('#LoginBox #username').focus();

                    return false;

                }

                postdata +="username=" + $('#LoginBox #username').val()+"&";

                if($('#LoginBox #password').val()==""){

                    $('#LoginBox .Show_Main .Login1').html('<span style="color:red">密码不能为空</span>');

                    $('#LoginBox #password').focus();

                    return false;

                }

                postdata +="password=" + $('#LoginBox #password').val()+"&";

                                 $('#LoginBox .Show_Main .Login1').html('');

                 var goods_id=$('#LoginBox #goods_id').val();



                 doLogin(postdata,function(username,id){

                    refreshHeaderUserInfo(username,'四川生态农业商城');

                    closeShow('LoginBox');

                    myAddFav(id);

                 },function(msg,id){

                    $('#LoginBox .Show_Main .Login1').html('<span style="color:red">' + msg  + '</span>');

                 },goods_id,goods_id)



            }

            function myAddFav(id){

                ajaxCheckLogin(function(id){

                    $.getJSON('user.php?act=collect&id='+id,null,function(result){

                        showBox("SCBox");

                    });

                },function(id){

                    $('#LoginBox #goods_id').val(id);

                    showBox("LoginBox");

                },id,id);

            }

    		function showBox(ID){

    			$("#"+ID).show(300);

    			var myH=$("#"+ID+" .Show_Box").height();

    			$("#"+ID+" .Show_Box").css("marginTop",-(myH/2)+"px");

    		}

    		function closeShow(ID){

    			$("#"+ID).hide(300);

    		}

        </script></body>

</html>

