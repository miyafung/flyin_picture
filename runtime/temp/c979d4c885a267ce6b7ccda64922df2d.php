<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:95:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/index\view\goods\introduction.html";i:1516244730;s:87:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/index\view\public\top.html";i:1516159101;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>商品页面</title>

		<link href="__INDEX__/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="__INDEX__/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="__INDEX__/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link type="text/css" href="__INDEX__/css/optstyle.css" rel="stylesheet" />
		<link type="text/css" href="__INDEX__/css/style.css" rel="stylesheet" />
		<script type="text/javascript" src="__INDEX__/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="__INDEX__/basic/js/quick_links.js"></script>
		<script type="text/javascript" src="__INDEX__/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="__INDEX__/js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="__INDEX__/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="__INDEX__/js/list.js"></script>

	</head>

	<body>


		<!--顶部导航条 -->
		
<!--顶部导航条 -->
<!--<div class="am-container header">-->
	<!--<ul class="message-l">-->
		<!--<div class="topMessage">-->
			<!--<div class="menu-hd">-->
			<!--<?php if(\think\Session::get('user_email')): ?>-->
			<!--欢迎<?php echo \think\Session::get('user_email'); ?>-->
			<!--<a href="<?php echo url('user/login/loginout'); ?>" target="_top" class="h">退出</a>-->
			<!--<?php else: ?>-->
				<!--<a href="<?php echo url('user/login/login'); ?>" target="_top" class="h">亲，请登录</a>-->
				<!--<?php endif; ?>-->
				<!--<a href="<?php echo url('user/register/register'); ?>" target="_top">免费注册</a>-->
			<!--</div>-->
		<!--</div>-->
	<!--</ul>-->
	<!--<ul class="message-r">-->
		<!--<div class="topMessage home">-->
			<!--<div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>-->
		<!--</div>-->
		<!--<div class="topMessage my-shangcheng">-->
			<!--<div class="menu-hd MyShangcheng"><a href="<?php echo url('user/info/index'); ?>" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>-->
		<!--</div>-->
		<!--<div class="topMessage mini-cart">-->
			<!--<div class="menu-hd"><a id="mc-menu-hd" href="<?php echo url('user/info/shopcart'); ?>" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>-->
		<!--</div>-->
		<!--<div class="topMessage favorite">-->
		<!--<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>-->
	<!--</ul>-->
<!--</div>-->

	<!--悬浮搜索框-->

<div class="nav white">
	<!-- <div class="logo"><img src="__INDEX__/images/logo.png" /></div> -->
	<div class="logoBig">
		<!--<li><img src="__INDEX__/images/logobig.png" /></li>-->
		<li><img src="http://opticres.com/Public/Home/img/logo.gif" /></li>
	</div>
	<div class="search-bar pr">
		<a name="index_none_header_sysc" href="#"></a>
		<form method="post" action="<?php echo url('index/goods/search'); ?>">
			<input id="searchInput" name="goods_keywords" type="text" placeholder="搜索" autocomplete="off">
			<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
		</form>
	</div>
</div>

<div class="clear"></div>
<!-- <b class="line"></b> -->


			<div class="listMain">

				<!--分类-->
			<div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
			</div>
				<ol class="am-breadcrumb am-breadcrumb-slash">
					<li><a href="<?php echo url('index/index'); ?>">首页</a></li>
					<?php if(is_array($cate_in) || $cate_in instanceof \think\Collection || $cate_in instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_in;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($i == 3): ?>
					<li class="am-active">
						<a href="<?php echo url('goods/goodslist',array('goods_pid'=>$vo['cate_id'])); ?>"><?php echo $vo['cate_name']; ?></a>
					</li>
					<?php else: ?>
					<li class="am-active">
						<?php echo $vo['cate_name']; ?>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ol>
				<script type="text/javascript">
					$(function() {});
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider) {
								$('body').removeClass('loading');
							}
						});
					});
				</script>
				<div class="scoll">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="__INDEX__/images/01.jpg" title="pic" />
								</li>
								<li>
									<img src="__INDEX__/images/02.jpg" />
								</li>
								<li>
									<img src="__INDEX__/images/03.jpg" />
								</li>
							</ul>
						</div>
					</section>
				</div>

				<!--放大镜-->

				<div class="item-inform">
					<div class="clearfixLeft" id="clearcontent">

						<div class="box">
							<script type="text/javascript">
								$(document).ready(function() {
									$(".jqzoom").imagezoom();
									$("#thumblist li a").click(function() {
										$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
										$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
										$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
									});
								});
							</script>

							<div class="tb-booth tb-pic tb-s310">
								<a href="{__INDEX__/images/01.jpg}"><img src="__INDEX__/images/01_mid.jpg" alt="细节展示放大镜特效" rel="__INDEX__/images/01.jpg" class="jqzoom" /></a>

							</div>
							<ul class="tb-thumb" id="thumblist">
								<?php if(is_array($goods_introduction['img']) || $goods_introduction['img'] instanceof \think\Collection || $goods_introduction['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_introduction['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li>
									<div class="tb-pic tb-s40">
										<a href="#"><img src="<?php echo $vo['url']; ?>" mid="<?php echo $vo['url']; ?>" big="<?php echo $vo['url']; ?>"></a>
									</div>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clearfixRight">

						<!--规格属性-->
						<!--名称-->
						<div class="tb-detail-hd">
							<h1>	
								 <?php if(is_array($goods_introduction['keywords']) || $goods_introduction['keywords'] instanceof \think\Collection || $goods_introduction['keywords'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_introduction['keywords'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								 <?php echo $vo['keywords_name']; endforeach; endif; else: echo "" ;endif; ?>
	          				</h1>
						</div>
						<div class="tb-detail-list">


							<!--各种规格-->
							<dl class="iteminfo_parameter sys_item_specpara">
								<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
								<dd>
									<!--操作页面-->

									<div class="theme-popover-mask"></div>

									<div class="theme-popover">
										<div class="theme-span"></div>
										<div class="theme-poptit">
											<a href="javascript:;" title="关闭" class="close">×</a>
										</div>
										<div class="theme-popbod dform">
											<form class="theme-signin" name="loginform" action="" method="post">

												<div class="theme-signin-left">

													<div class="theme-options">
														<div class="cart-title number">数量</div>
														<dd>
															<input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
															<input id="text_box" name="" type="text" value="1" style="width:30px;" />
															<input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
															<span id="Stock" class="tb-hidden">库存<span class="stock"><?php echo $goods_introduction['goods_inventory']; ?></span>件</span>
														</dd>

													</div>
													<div class="clear"></div>

													<div class="btn-op">
														<div class="btn am-btn am-btn-warning">确认</div>
														<div class="btn close am-btn am-btn-warning">取消</div>
													</div>
												</div>
												<div class="theme-signin-right">
													<div class="img-info">
														<img src="__INDEX__/images/songzi.jpg" />
													</div>
													<div class="text-info">
														<span class="J_Price price-now">¥39.00</span>
														<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
													</div>
												</div>

											</form>
										</div>
									</div>

								</dd>
							</dl>
							<div class="clear"></div>
							<!--活动	-->
							<!-- <div class="shopPromotion gold">
								<div class="clear"></div>
							</div> -->
						</div>

						<div class="pay">
							<div class="pay-opt">
							<a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
							<a><span class="am-icon-heart am-icon-fw">收藏</span></a>
							
							</div>
							<li>
								<div class="clearfix tb-btn tb-btn-buy theme-login">
									<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="#">立即购买</a>
								</div>
							</li>
							<li>
								<div class="clearfix tb-btn tb-btn-basket theme-login">
									<!-- <a id="LikBasket" title="加入购物车" href="<?php echo url('user/info/addShopcart',Array('goods_id'=>$goods_introduction['goods_id'])); ?>"><i></i>加入购物车</a> -->
									<a href="javascript:if(confirm('确认加入购物车？')) addShopcart(<?php echo $goods_introduction['goods_id']; ?>)">加入购物车</a>
								</div>
							</li>
						</div>

					</div>

					<div class="clear"></div>

				</div>

				<!--优惠套装-->
				<div class="clear"></div>
				
							
				<!-- introduce-->

				<div class="introduce">
					<div class="browse">
					    <div class="mc"> 
						     <ul>					    
						     	<div class="mt">            
						            <h2>看了又看</h2>        
					            </div>
						     	

					      
						     </ul>					
					    </div>
					</div>
					<div class="introduceMain">
						<div class="am-tabs" data-am-tabs>
							<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active">
									<a href="#">

										<span class="index-needs-dt-txt">宝贝详情</span></a>

								</li>

								<li>
									<a href="#">

										<span class="index-needs-dt-txt">全部评价</span></a>

								</li>

								<li>
									<a href="#">

										<span class="index-needs-dt-txt">猜你喜欢</span></a>
								</li>
							</ul>

							<div class="am-tabs-bd">

								<div class="am-tab-panel am-fade am-in am-active">
									<div class="J_Brand">

										<div class="attr-list-hd tm-clear">
											<h4>产品参数：</h4></div>
										<div class="clear"></div>
										<ul id="J_AttrUL">
											<?php if(is_array($goods_introduction['goodsproperty']) || $goods_introduction['goodsproperty'] instanceof \think\Collection || $goods_introduction['goodsproperty'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_introduction['goodsproperty'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<li title=""><?php echo $vo['property_name']; ?>:&nbsp;<?php echo $vo['goodsproperty_content']; ?></li>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
										<div class="clear"></div>
									</div>

									<div class="details">
										<div class="attr-list-hd after-market-hd">
											<h4>商品细节</h4>
										</div>
										<div class="twlistNews">
										<?php if(is_array($goods_introduction['img']) || $goods_introduction['img'] instanceof \think\Collection || $goods_introduction['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_introduction['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<img src="<?php echo $vo['url']; ?>" />
										<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div>
									<div class="clear"></div>

								</div>

								<div class="am-tab-panel am-fade">
									

                                    <div class="clear"></div>

									<div class="clear"></div>



									<div class="clear"></div>

									<!--分页 -->
									<ul class="am-pagination am-pagination-right">

									</ul>
									<div class="clear"></div>

									<div class="tb-reviewsft">
										<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
									</div>

								</div>

							</div>

						</div>

						<div class="clear"></div>


					</div>

				</div>
			</div>


	</body>
	<script type="text/javascript">
		function addShopcart(goods_id){
			$.ajax({
				type:'post',
				data:{goods_id,goods_id},
				url:"<?php echo url('user/info/addshopcart'); ?>",
				success:function(data){
					if (data.code=='0') {
						alert(data.msg);
						window.location.href=data.url;
					}
					else{
						alert('加入购物车成功！');
					}
				}
			})
			// alert(goods_id);
		}
	</script>

</html>