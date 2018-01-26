<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\goods\add.html";i:1516010459;s:83:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\layout.html";i:1516011151;s:90:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\navbar.html";i:1512359202;s:92:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\slidebar.html";i:1516011179;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>飞宇图库</title>
    <link href="__LAYUIADMIN__/css/layui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="__FONT__/css/font-awesome.min.css"><!--字体图标-->
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <!-- navbar -->
        <div class="layui-logo">Flyin picture</div>
<!-- 头部区域（可配合layui已有的水平导航） -->
<ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item"><a href="">控制台</a></li>
    <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
            <dd><a href="">邮件管理</a></dd>
            <dd><a href="">消息管理</a></dd>
            <dd><a href="">授权管理</a></dd>
        </dl>
    </li>
</ul>
<ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
        <a href="javascript:;">
            <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
            <?php echo \think\Session::get('admin_name'); ?>
        </a>
        <dl class="layui-nav-child">
            <dd><a href="">基本资料</a></dd>
            <dd><a href="<?php echo url('login/logout'); ?>">退出账号</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item"><a href="<?php echo url('login/logout'); ?>">退了</a></li>
</ul>
        <!-- /navbar -->
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <!-- slidebar -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
    <li class="layui-nav-item"><a href="http://flyin.yuzhiwei.com.cn/public/index.php/admin/wxapply/index">微信报名</a></li>
    <li class="layui-nav-item">
        <a href="javascript:;">管理员管理</a>
        <dl class="layui-nav-child">
            <dd><a href="<?php echo url('admin/adminlist'); ?>"> 管理员列表</a></dd>
            <dd><a href="<?php echo url('admin/add'); ?>"> 添加管理员</a></dd>
        </dl>
    </li>

    <li class="layui-nav-item">
        <a class="" href="javascript:;">分类管理 </a>
        <dl class="layui-nav-child">
            <dd><a href="<?php echo url('cate/catelist'); ?>">分类列表</a></dd>
            <dd><a href="<?php echo url('cate/add'); ?>">分类添加</a></dd>

        </dl>
    </li>

    <li class="layui-nav-item">
        <a class="" href="javascript:;">商品(图片)管理</a>
        <dl class="layui-nav-child">
            <dd><a href="<?php echo url('goods/goodslist'); ?>">商品列表</a></dd>
            <dd><a href="<?php echo url('goods/add'); ?>">商品添加</a></dd>

        </dl>
    </li>

    <li class="layui-nav-item">
        <a class="" href="javascript:;">关键字管理</a>
        <dl class="layui-nav-child">
            <dd><a href="<?php echo url('keywords/keywordslist'); ?>">关键字列表</a></dd>
            <dd><a href="<?php echo url('keywords/add'); ?>">关键字添加</a></dd>
        </dl>
    </li>


    <li class="layui-nav-item">
        <a class="" href="javascript:;">属性管理</a>
        <dl class="layui-nav-child">
            <dd><a href="<?php echo url('property/propertylist'); ?>">属性列表</a></dd>
            <dd><a href="<?php echo url('property/add'); ?>">属性添加</a></dd>
        </dl>
    </li>
</ul>
            <!-- /slidebar -->
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 10px;">
            ﻿<blockquote class="layui-elem-quote layui-text">
	图片添加
</blockquote>
<div class="layui-row">
	<form action="<?php echo url('goods/addhanddle'); ?>" method="post" enctype="multipart/form-data" class="layui-form">

		<div class="layui-form-item">
			<label class="layui-form-label">商品名称</label>
			<div class="layui-input-block">
				<input id="goods_name" name="goods_name" type="text"  autocomplete="off" placeholder="请输入商品名称" class="layui-input" required>
			</div>
		</div>

		<div class="layui-col-md6">
			<label class="layui-form-label">所属分类</label>
			<div class="layui-input-block" >
				<select name="goods_pid" lay-filter="" >
					<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo1['cate_id']; ?>" disabled="">【<?php echo $vo1['cate_name']; ?>】</option>
					<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo2['cate_id']; ?>" disabled="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo2['cate_name']; ?></option>
					<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo3['cate_id']; ?>" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo3['cate_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>

		<div class="layui-col-md6">
			<div class="layui-form-item">
				<label class="layui-form-label">商品状态</label>
				<div class="layui-input-block">
					<input name="goods_status" type="checkbox" value="1" lay-skin="switch" lay-text="上架|下架" checked="">
				</div>
			</div>
		</div>

		<div class="layui-col-md12">
			<fieldset class="layui-elem-field layui-field-title">
				<legend>商品缩略图</legend>
			</fieldset>

			<div class="layui-upload">
				<blockquote class="layui-elem-quote layui-quote-nm" >
					<img src="__ASSETS__/images/upload.png" id="img" name="img" width="130" style="display:inline-block">
					<div class="progress" style="display:inline-block">
						<div id="thumb_progress" class="progress-bar" style="width:0%;"></div>
					</div>
					<span id="thumb_upload" class="btn btn-primary fileinput-button" style="display:inline-block">
						<span><button class="layui-btn layui-btn-sm layui-btn-primary"><i class="layui-icon">&#x1002;</i>上传</button></span>
						<input id="goods_thumb" placeholder="" class="" type="file" name="goods_thumb" >
					</span>
					<a id="thumb_cancle" href="javascript:void(0)" class="btn btn-warning" role="button" onclick="cancleUpload()" style="display:none">
						<i style="color: #ac3100" class="fa fa-trash" aria-hidden="true"></i>
					</a>
				</blockquote>
			</div>
		</div>


		<div class="layui-col-md6">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>【jpg】</legend>
			</fieldset>

			<div class="layui-upload">
				<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
					预览图：

					<div class="progress">
						<div id="img_progress" class="progress-bar" style="width:0%;"></div>
					</div>

					<span id="img_upload" class="btn btn-primary fileinput-button">
						<span><i class="fa fa-upload" aria-hidden="true" style="font-size:2rem;color:#ff5b49"></i></span>
						<input id="goods_img" placeholder="" class="" type="file" name="goods_img" multiple="">
					</span>
					<div class="preview" style="margin-top:20px;"></div>

				</blockquote>
			</div>
		</div>


		<div class="layui-col-md6">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>【png】</legend>
			</fieldset>

			<div class="layui-upload">
				<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
					预览图：
					<div class="progress2">
						<div id="img_progress2" class="progress-bar" style="width:0%;"></div>
					</div>
					<span id="img_upload2" class="btn btn-primary fileinput-button">
						<span><i class="fa fa-upload" aria-hidden="true" style="font-size:2rem;color:#ff5b49"></i></span>
						<input id="goods_img2" placeholder="" class="" type="file" name="goods_img2" multiple="">
					</span>
					<div class="preview2" style="margin-top:20px;"></div>
				</blockquote>
			</div>
		</div>

		<!--<div class="layui-col-md12">-->
			<!--<label for="goods_pid"> 所属分类 </label>-->
			<!--<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>-->
			<!--<br>【<?php echo $vo1['cate_name']; ?>】-->
			<!--<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>-->
			<!--<br>   &nbsp;&nbsp;&nbsp;&nbsp; [<?php echo $vo2['cate_name']; ?>]-->
			<!--<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>-->
			<!--&#45;&#45;&#45;&#45;<input name="goods_pid" value="<?php echo $vo3['cate_id']; ?>" type="radio"><?php echo $vo3['cate_name']; ?>-->
			<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
			<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
			<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
		<!--</div>-->

		<div class="layui-col-md12">
			<button type="submit" class="layui-btn">添加商品</button>
			<button type="reset" class="layui-btn">重置</button>
		</div>

	</form>

</div>

	<!-- jqeury-file-upload -->
		<!-- <link href="__ADMIN__/css/bootstrap.min.css" rel="stylesheet">   -->
		<link rel="stylesheet" href="__JFU__/css/jquery.fileupload.css">
		<link rel="stylesheet" href="__JFU__/css/jquery.fileupload-ui.css">
		<!-- <script src="__ADMIN__/js/jquery-2.0.3.min.js"></script>  -->
		<!--<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>-->
		<script src="__JFU__/js/jquery-3.2.1.min.js"></script>
		<script src="__JFU__/js/vendor/jquery.ui.widget.js"></script>
		<script src="__JFU__/js/jquery.fileupload.js"></script>
		<script src="__JFU__/js/jquery.iframe-transport.js"></script>
		<script type="text/javascript">
		    $(function() {  
		        $("#goods_thumb").fileupload({  
		                url: '<?php echo url("admin/goods/uploadthumb"); ?>',  
		                sequentialUploads: true  
		            }).bind('fileuploadprogress', function (e, data) {  
		                var progress = parseInt(data.loaded / data.total * 100, 10);  
		                $("#thumb_progress").css('width',progress + '%');  
		                $("#thumb_progress").html(progress + '%');  
		            }).bind('fileuploaddone', function (e, data) {console.log(data);
		                $("#img").attr("src",data.result);
		                $("#thumb_upload").css({display:"none"}); 
		                $("#thumb_cancle").css({display:""}); 
		            }
				);
		        });
		</script>

		<script type="text/javascript">
			$(function(){
				$('#thumb_cancle').click(function(){
					$.ajax({
						url:'<?php echo url("admin/goods/canclethumb"); ?>',
						type:'post',
						success:function(data){
							$("#thumb_upload").css({display:""});
							$("#thumb_cancle").css({display:"none"});
							$("#thumb_progress").css('width',0);
							$("#thumb_progress").html('');
							$("#img").attr("src","__ASSETS__/images/upload.png");

						}
					});
				});
			});
		</script>
		<!-- 商品细节图 -->
		<script type="text/javascript">
		$(function(){
			$('#goods_img').fileupload({
				url:'<?php echo url("admin/goods/imgupload"); ?>',
				dataType: "json",
				multipart:true,
				sequentialUploads: true,
				done:function(e,data){
					$(".preview").append("<div style='margin-top:10px;display: inline-block; '><img src="+data.result+" width='60' height='60'>");
					$(".preview").append("<a class='img_cancle btn btn-warning' role='button' style=''>	 <i style=\"color: #ac3100\" class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div>");
				},

				progressall:function(e,data){
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$("#img_progress").css("width", progress + "%");
					$("#img_progress").html("上传总进度："+progress+"%");
				},

				add: function(e, data) {
					var uploadErrors = [];
					var acceptFileTypes = /^image\/(jpe?g|png)$/i;
					//文件类型判断
					if(data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
						uploadErrors.push('不是允许上传的文件类型');
					}
					//文件大小判断
					if(data.originalFiles[0]['size'].length && data.originalFiles[0]['size'] > 5000000) {
						uploadErrors.push('文件大小太大');
					}
					if(uploadErrors.length > 0) {
						alert(uploadErrors.join("\n"));
					} else {
						data.submit();
					}
				}
			})
		})
		</script>
		<script type="text/javascript">
			$(function(){
				$(".preview").on("click",".img_cancle",function(){
					 var index = $(".preview a").index(this);
					 var me = this;
					 $.ajax({
						data:{'index':index},
						type:"post",
						url:"<?php echo url('admin/goods/imgcancle'); ?>",
						success:function(data){
							$(me).prev('div').css({display:"none"});
							$(me).css({display:"none"});
						}
					 })
				})
			})
		</script>
		<!-- /商品细节图 -->



		<!--PNG-->
		<script type="text/javascript">
			$(function() {
				$("#goods_thumb2").fileupload({
					url: '<?php echo url("admin/goods/uploadthumb2"); ?>',
					sequentialUploads: true
				}).bind('fileuploadprogress', function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$("#thumb_progress2").css('width',progress + '%');
					$("#thumb_progress2").html(progress + '%');
				}).bind('fileuploaddone', function (e, data) {console.log(data);
						$("#img2").attr("src",data.result);
						$("#thumb_upload2").css({display:"none"});
						$("#thumb_cancle2").css({display:""});
					}
				);
			});
		</script>

		<script type="text/javascript">
			$(function(){
				$('#thumb_cancle2').click(function(){
					$.ajax({
						url:'<?php echo url("admin/goods/canclethumb2"); ?>',
						type:'post',
						success:function(data){
							$("#thumb_upload2").css({display:""});
							$("#thumb_cancle2").css({display:"none"});
							$("#thumb_progress2").css('width',0);
							$("#thumb_progress2").html('');
							$("#img2").attr("src","__ASSETS__/images/upload.png");

						}
					});
				});
			});
		</script>
		<!-- 商品细节图 -->
		<script type="text/javascript">
			$(function(){
				$('#goods_img2').fileupload({
					url:'<?php echo url("admin/goods/imgupload2"); ?>',
					dataType: "json",
					multipart:true,
					sequentialUploads: true,
					done:function(e,data){
						$(".preview2").append("<div style='margin-top:10px;display: inline-block; '><img src="+data.result+" width='60' height='60'>");
						$(".preview2").append("<a class='img_cancle2 btn btn-warning' role='button' style=''>	 <i style=\"color: #ac3100\" class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div>");
					},

					progressall:function(e,data){
						var progress = parseInt(data.loaded / data.total * 100, 10);
						$("#img_progress2").css("width", progress + "%");
						$("#img_progress2").html("上传总进度："+progress+"%");
					},

					add: function(e, data) {
						var uploadErrors = [];
						var acceptFileTypes = /^image\/(jpe?g|png)$/i;
						//文件类型判断
						if(data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
							uploadErrors.push('不是允许上传的文件类型');
						}
						//文件大小判断
						if(data.originalFiles[0]['size'].length && data.originalFiles[0]['size'] > 15000000) {
							uploadErrors.push('文件大小太大');
						}
						if(uploadErrors.length > 0) {
							alert(uploadErrors.join("\n"));
						} else {
							data.submit();
						}
					}
				})
			})
		</script>
		<script type="text/javascript">
			$(function(){
				$(".preview2").on("click",".img_cancle2",function(){
					var index = $(".preview2 a").index(this);
					var me = this;
					$.ajax({
						data:{'index':index},
						type:"post",
						url:"<?php echo url('admin/goods/imgcancle2'); ?>",
						success:function(data){
							$(me).prev('div').css({display:"none"});
							$(me).css({display:"none"});
						}
					})
				})
			})
		</script>
		<!-- /商品细节图 -->

		<!--PNG-->




		    <!--&lt;!&ndash; <script src="__ASSETS__/js/fuelux/data/fuelux.tree-sampledata.js"></script> &ndash;&gt;-->
		    <!--<script src="__ASSETS__/js/fuelux/fuelux.tree.min.js"></script>-->
		    <!--<script type="text/javascript">-->
			<!--jQuery(function($){-->

		<!--$('#tree1').ace_tree({-->
			<!--dataSource: treeDataSource ,-->
			<!--multiSelect:true,-->
			<!--loadingHTML:'&lt;div class="tree-loading"&gt;&lt;i class="icon-refresh icon-spin blue"&gt;&lt;/i&gt;&lt;/div&gt;',-->
			<!--'open-icon' : 'icon-minus',-->
			<!--'close-icon' : 'icon-plus',-->
			<!--'selectable' : true,-->
			<!--'selected-icon' : 'icon-ok',-->
			<!--'unselected-icon' : 'icon-remove'-->
		<!--});-->

		<!--$('#tree2').ace_tree({-->
			<!--dataSource: treeDataSource2 ,-->
			<!--loadingHTML:'&lt;div class="tree-loading"&gt;&lt;i class="icon-refresh icon-spin blue"&gt;&lt;/i&gt;&lt;/div&gt;',-->
			<!--'open-icon' : 'icon-folder-open',-->
			<!--'close-icon' : 'icon-folder-close',-->
			<!--'selectable' : false,-->
			<!--'selected-icon' : null,-->
			<!--'unselected-icon' : null-->
		<!--});-->

<!--});-->
		<!--</script>-->
			<!-- /jquery-file-upliad -->


        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © 2018 - 飞宇集团图库
    </div>
</div>
<script src="__LAYUIADMIN__/layui.all.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</body>
</html>