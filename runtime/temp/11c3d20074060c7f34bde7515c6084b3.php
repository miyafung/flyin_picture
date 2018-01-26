<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/index\view\index\index.html";i:1516258646;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>首页</title>
		<!--<link href="__INDEX__/assets/css/amazeui.css" rel="stylesheet" type="text/css" /> &lt;!&ndash;分类页&ndash;&gt;-->
		<!--<link href="__INDEX__/assets/css/admin.css" rel="stylesheet" type="text/css" />-->
		<link href="__INDEX__/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="__INDEX__/css/hmstyle.css" rel="stylesheet" type="text/css" />
		<script src="__INDEX__/assets/js/jquery.min.js"></script>


		<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	</head>


	<body>
	<div style="height: 60px;width: 100%;background: #c0c4cd">

	</div>

		<div class="container">
			<div>
				<img src="http://opticres.com/Public/Home/img/logo.gif" style="width:300px" alt="" class="img-responsive center-block">
			</div>


			<div class="shopNav" >
				<div class="slideall" style="height: auto;">
					<div class="long-title"><span class="all-goods">全部分类</span></div>

					<div class="nav-cont">
						<ul>
							<li class="index">
								<input type="text" style="height:46px;width:800px;">
							</li>
						</ul>
					</div>

					<!--侧边导航 -->
					<div id="nav" class="navfull" style="position: static;">
						<div class="area clearfix">
							<div class="category-content" id="guide_2">

								<div class="category" style="box-shadow:none ;margin-top: 2px;">
									<ul class="category-list navTwo" id="js_climit_li">
										<?php if(is_array($cate_list) || $cate_list instanceof \think\Collection || $cate_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
										<li >
											<div class="category-info">
												<h3 style="margin-top: -2px;" class="category-name b-category-name"><i><img src="__INDEX__/images/chocolate.png"></i><a class="ml-22" title="巧克力"><?php echo $vo1['cate_name']; ?></a></h3>
												<em>&gt;</em></div>
											<div class="menu-item menu-in top">
												<div class="area-in">
													<div class="area-bg">
														<div class="menu-srot">
															<div class="sort-side">
																<dl class="dl-sort">
																	<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
																	<dt><?php echo $vo2['cate_name']; ?></dt>
																	<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
																	<dd><a title="<?php echo $vo3['cate_name']; ?>" href="<?php echo url('goods/goodslist',array('goods_pid'=>$vo3['cate_id'])); ?>"><span><?php echo $vo3['cate_name']; ?></span></a></dd>
																	<?php endforeach; endif; else: echo "" ;endif; ?><br>
																	<?php endforeach; endif; else: echo "" ;endif; ?>
																</dl>
															</div>
														</div>
													</div>
												</div>
											</div>
											<b class="arrow"></b>
										</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!--导航 -->
					<script type="text/javascript">
                        (function() {
                            $('.am-slider').flexslider();
                        });
                        $(document).ready(function() {
                            $("li").hover(function() {
                                $(".category-content .category-list li.first .menu-in").css("display", "none");
                                $(".category-content .category-list li.first").removeClass("hover");
                                $(this).addClass("hover");
                                $(this).children("div.menu-in").css("display", "block")
                            }, function() {
                                $(this).removeClass("hover")
                                $(this).children("div.menu-in").css("display", "none")
                            });
                        })
					</script>


					<!--各类活动-->




					<!--<script type="text/javascript">-->
                        <!--if ($(window).width() < 640) {-->
                            <!--function autoScroll(obj) {-->
                                <!--$(obj).find("ul").animate({-->
                                    <!--marginTop: "-39px"-->
                                <!--}, 500, function() {-->
                                    <!--$(this).css({-->
                                        <!--marginTop: "0px"-->
                                    <!--}).find("li:first").appendTo(this);-->
                                <!--})-->
                            <!--}-->
                            <!--$(function() {-->
                                <!--setInterval('autoScroll(".demo")', 3000);-->
                            <!--})-->
                        <!--}-->
					<!--</script>-->
				</div>

			</div>
		</d>





	</body>

</html>