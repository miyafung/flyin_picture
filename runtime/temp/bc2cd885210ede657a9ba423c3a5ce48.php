<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\cate\add.html";i:1516011946;s:83:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\layout.html";i:1516011151;s:90:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\navbar.html";i:1512359202;s:92:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\slidebar.html";i:1516011179;}*/ ?>
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
	商品分类添加
</blockquote>
<form action="<?php echo url('cate/addhanddle'); ?>" method="post" class="layui-form layui-form-pane">

	<div class="layui-form-item layui-col-md6">
		<label class="layui-form-label">分类名称</label>
		<div class="layui-input-block">
			<input id="cate_name" name="cate_name" placeholder="请输入分类名称"  type="text" class="layui-input" required>
		</div>
	</div>

	<div class="layui-form-item layui-col-md6">
		<label class="layui-form-label">所属分类</label>
		<div class="layui-input-block" >
			<select class="form-control" id="pid" name="cate_pid">
				<option value="0">顶级分类</option>
				<?php if(is_array($cate_list) || $cate_list instanceof \think\Collection || $cate_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo['cate_id']; ?>"><?php echo $vo['str']; ?><?php echo $vo['cate_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>


	<div class="layui-form-item layui-col-md6">
		<button type="submit" class="layui-btn">添加分类</button>
		<button type="reset" class="layui-btn">重置</button>
	</div>

</form>

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