<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:92:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/index\view\goods\goodslist.html";i:1516245269;s:87:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/index\view\public\top.html";i:1516159101;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>商品列表</title>

		<link href="__INDEX__/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="__INDEX__/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="__INDEX__/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="__INDEX__/css/seastyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="__INDEX__/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
	</head>
	<style type="text/css">
		#page1 li{
			display: inline;
		}
	</style>

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


           <div class="search">
			<div class="search-list">
			<div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
			</div>

					<div class="am-g am-g-fixed">
						<div class="am-u-sm-12 am-u-md-12">
							<div class="search-content">
								<div class="clear"></div>

								<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
									<?php if(is_array($goods_info) || $goods_info instanceof \think\Collection || $goods_info instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php echo url('goods/introduction',array('goods_id'=>$vo['goods_id'])); ?>">
											<div class="i-pic limit">
												<img style="width: 218px;height:163px; " src="<?php echo $vo['goods_thumb']; ?>" />
												<p class="title fl">
												<?php echo $vo['goods_name']; if(is_array($vo['keywords']) || $vo['keywords'] instanceof \think\Collection || $vo['keywords'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['keywords'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
												<?php echo $vo1['keywords_name']; endforeach; endif; else: echo "" ;endif; ?>
												</p>
												<!--<p class="price fl">-->
													<!--<?php if($vo['goods_after_price']): ?>-->

															<!--<em>¥</em><b class="sys_item_price"><?php echo $vo['goods_after_price']; ?></b>-->
															<!--&nbsp;-->
															<!--<em>¥</em><del><?php echo $vo['goods_price']; ?></del>-->

														<!--<?php else: ?>-->

															<!--<em>¥</em><b class="sys_item_price"><?php echo $vo['goods_price']; ?></b>-->

													<!--<?php endif; ?>-->
												<!--</p>-->
												<!--<p class="number fl">-->
													<!--销量<span><?php echo $vo['goods_sales']; ?></span>-->
												<!--</p>-->
											</div>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>

								</ul>
							</div>

							<div class="clear"></div>
							<!--分页 -->
							<div class="am-pagination am-pagination-right" id="page1">
								<?php echo $show; ?>
							</div>

						</div>
					</div>

				</div>

			</div>




		<script>
			window.jQuery || document.write('<script src="basic/js/jquery-1.9.min.js"><\/script>');
		</script>
		<script type="text/javascript" src="__ADMIN__/basic/js/quick_links.js"></script>

<div class="theme-popover-mask"></div>

	</body>

</html>