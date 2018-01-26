<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:98:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\property\propertylist.html";i:1516011642;s:83:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\layout.html";i:1516011151;s:90:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\navbar.html";i:1512359202;s:92:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\public\slidebar.html";i:1516011179;}*/ ?>
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
	属性列表
</blockquote>

<a class="green" href="<?php echo url('property/add'); ?>">
	<i style="color: #ac4941" class="fa fa-plus-square" aria-hidden="true"></i>添加属性
</a>




<div class="layui-inline">
	<div class="layui-input-block">
		<select onchange=mbar(this) name="select" class="layui-select">
			<option selected>属性分类选择</option>
			<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $vo1['cate_name']; ?>"  disabled="">【<?php echo $vo1['cate_name']; ?>】</option>
			<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $vo2['cate_name']; ?>"disabled="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo2['cate_name']; ?></option>
			<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo url('property/propertylist',array('property_pid'=>$vo3['cate_id'])); ?>" >&nbsp;&nbsp;&nbsp;&nbsp;-- --<?php echo $vo3['cate_name']; ?></option>

			<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</select>
	</div>
</div>


<script type="text/javascript">
    //下拉筛选
    function mbar(sobj){
        var docurl =sobj.options[sobj.selectedIndex].value;
        if (docurl != "") {
            //            open(docurl,'_blank');
            open(docurl,'_self');
            sobj.selectedIndex=0;
            sobj.blur();
        }
    }
</script>


	<!--<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>-->
	<!--<?php echo $vo1['cate_name']; ?>-->
			<!--<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>-->
					<!--<?php echo $vo2['cate_name']; ?>-->
						<!--<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>-->
							<!--<a href="<?php echo url('property/propertylist',array('property_pid'=>$vo3['cate_id'])); ?>"><?php echo $vo3['cate_name']; ?></a>-->
						<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

				<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
	<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->



<form action="<?php echo url('cate/sort'); ?>" method="post">
	<table  class="layui-table">
	<thead>
			<th>ID</th>
			<th>属性名称</th>
			<th>
	<ul class="nav nav-list">
	<li class="active">
		<a href="#" class="dropdown-toggle">
			<!-- <i class="icon-desktop"></i> -->
			<span class="menu-text">请选择属性分类</span>
			<b class="arrow icon-angle-down"></b>
		</a>
			<ul class="nav nav-list" style="display: none;">
		<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
		<li class="active">
			<a href="#" class="dropdown-toggle">
				<!-- <i class="icon-desktop"></i> -->
				<span class="menu-text"> <?php echo $vo1['cate_name']; ?> </span>
				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu" style="display: none";>
				<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
				<li class="open">
					<a href="#" class="dropdown-toggle">
						<i class="icon-double-angle-right"></i>

						<?php echo $vo2['cate_name']; ?>
						<b class="arrow icon-angle-down"></b>
					</a>
					<ul class="submenu" style="display: none;">

						<div class="col-xs-6">
							<!-- <select id="goods_pid" name="goods_pid"> -->
							<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
							<li>
								<a href="<?php echo url('property/propertylist',array('property_pid'=>$vo3['cate_id'])); ?>"><?php echo $vo3['cate_name']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- </select> -->
						</div>


					</ul>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
			</ul>

		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
			</li>
			</ul>
			</th>
			<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 132px;" aria-label="Clicks: activate to sort column ascending">操作</th>

			</tr>
	</thead>

<tbody role="alert" aria-live="polite" aria-relevant="all">
	<?php if(is_array($property_select) || $property_select instanceof \think\Collection || $property_select instanceof \think\Paginator): $i = 0; $__LIST__ = $property_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="odd">

			<td class=" ">
				<a href="#"><?php echo $vo['property_id']; ?></a>
			</td>
			<td class=" "><?php echo $vo['property_name']; ?></td>
			<td class=" ">
			全部商品
				<?php if(is_array($vo['father']) || $vo['father'] instanceof \think\Collection || $vo['father'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['father'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
					>><?php echo $vo1; endforeach; endif; else: echo "" ;endif; ?>
			</td>
			<td class=" ">
				<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
					<a class="green" href="<?php echo url('property/upd',array('property_id'=>$vo['property_id'])); ?>">
						<i style="color: #60ac6d" class="fa fa-pencil"></i>
					</a>

					<a class="red" href="javascript:if(confirm('确认删除？')) location='<?php echo url('property/del',array('property_id'=>$vo['property_id'])); ?>'">
						<i style="color: #ac3100" class="fa fa-trash" aria-hidden="true"></i>
					</a>
				</div>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
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