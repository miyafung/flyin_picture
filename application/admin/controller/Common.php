<?php
namespace app\admin\controller;
/**
 * 公共控制器
 */
use think\Request;
class Common extends \think\Controller
{
    public function _initialize(){
        if(!session('?admin_name')){
            $this->error('您还没有登录','login/login');
        }
    }
}
?>