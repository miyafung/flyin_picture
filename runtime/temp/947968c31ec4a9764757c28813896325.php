<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\property\add.html";i:1515726152;s:83:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\layout.html";i:1515742315;s:90:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\navbar.html";i:1512359202;s:92:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\slidebar.html";i:1515476727;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>飞宇图库</title>
    <link href="__LAYUIADMIN__/css/layui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!--字体图标-->
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
            <!--<ul class="layui-nav layui-nav-tree"  lay-filter="test">-->
    <!--&lt;!&ndash;<li class="layui-nav-item layui-nav-itemed">&ndash;&gt;-->
        <!--&lt;!&ndash;<a class="" href="javascript:;">其它</a>&ndash;&gt;-->
        <!--&lt;!&ndash;<dl class="layui-nav-child">&ndash;&gt;-->
            <!--&lt;!&ndash;<dd><a href="javascript:;">列表一</a></dd>&ndash;&gt;-->
            <!--&lt;!&ndash;<dd><a href="javascript:;">列表二</a></dd>&ndash;&gt;-->
            <!--&lt;!&ndash;<dd><a href="javascript:;">列表三</a></dd>&ndash;&gt;-->
            <!--&lt;!&ndash;<dd><a href="">超链接</a></dd>&ndash;&gt;-->
        <!--&lt;!&ndash;</dl>&ndash;&gt;-->
    <!--&lt;!&ndash;</li>&ndash;&gt;-->

    <!--<li class="layui-nav-item"><a href="http://flyin.yuzhiwei.com.cn/public/index.php/admin/wxapply/index">微信报名</a></li>-->
    <!---->
    <!--<li class="layui-nav-item layui-nav-itemed">-->
        <!--<a class="" href="javascript:;">管理员管理 </a>-->
        <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="<?php echo url('admin/adminlist'); ?>"> 管理员列表</a></dd>-->
            <!--<dd><a href="<?php echo url('admin/add'); ?>"> 添加管理员</a></dd>-->
        <!--</dl>-->
    <!--</li>-->

    <!--<li class="layui-nav-item layui-nav-itemed">-->
        <!--<a class="" href="javascript:;">商品管理 </a>-->
        <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="">0 分类管理</a></dd>-->
            <!--<dd><a href="<?php echo url('cate/catelist'); ?>">- - -分类列表</a></dd>-->
            <!--<dd><a href="<?php echo url('cate/add'); ?>">- - -分类添加</a></dd>-->

        <!--</dl>-->
        <!---->
        <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="">0 商品管理</a></dd>-->
            <!--<dd><a href="<?php echo url('goods/goodslist'); ?>">- - -商品列表</a></dd>-->
            <!--<dd><a href="<?php echo url('goods/add'); ?>">- - -商品添加</a></dd>-->
        <!--</dl>-->
        <!---->

        <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="">0 关键字管理</a></dd>-->
            <!--<dd><a href="<?php echo url('keywords/keywordslist'); ?>">- - -关键字列表</a></dd>-->
            <!--<dd><a href="<?php echo url('keywords/add'); ?>">- - -关键字添加</a></dd>-->

        <!--</dl>-->
        <!---->
        <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="">0 属性管理</a></dd>-->
            <!--<dd><a href="<?php echo url('property/propertylist'); ?>">- - -属性列表</a></dd>-->
            <!--<dd><a href="<?php echo url('property/add'); ?>">- - -属性添加</a></dd>-->
        <!--</dl>-->
    <!--</li>-->

<!--</ul>-->


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
	属性选择列表 <br>
	下拉选择黑色为可选
</blockquote>

<form class="layui-form layui-form-pane" action="<?php echo url('property/addhanddle'); ?>" method="post" enctype="multipart/form-data">
	<div class="layui-form-item layui-col-md6">
		<label class="layui-form-label">属性名称</label>
		<div class="layui-input-block">
			<input type="text" id="property_name" name="property_name" placeholder="请输入商品名称" class="layui-input" required>
		</div>
	</div>






	<div class="layui-form-item layui-col-md6">
		<label class="layui-form-label">属性类别</label>
		<div class="layui-input-block" >
			<select name="property_pid" lay-filter="aihao" >
				<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo1['cate_id']; ?>" disabled="">【<?php echo $vo1['cate_name']; ?>】</option>
				<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo2['cate_id']; ?>"  disabled="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo2['cate_name']; ?></option>
				<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo3['cate_id']; ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo3['cate_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>

	<div class="layui-form-item layui-col-md6">
		<button type="submit" class="layui-btn">添加关键字</button>
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