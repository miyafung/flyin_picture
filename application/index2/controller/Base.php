<?php
/**
 * Created by PhpStorm.
 * User: fengmeihua
 * Date: 2017/11/20
 * Time: 15:28
 */
namespace app\index\controller;
use think\Controller;
use EasyWeChat\Foundation\Application;
class Base extends Controller
{
    protected $weixin;
    public function __construct(){
        parent::__construct();
        $now_view = $this->request->controller().'/'.$this->request->action();
        $wx_config = config('weixin');
        $this->weixin = new Application($wx_config);
        if (empty(session('wx_info')) && $now_view != 'Base/thirdlogin') {
            //第三方登录
            $this->weixin->oauth->redirect()->send();
        }
    }

    public function thirdLogin()
    {
        $user = $this->weixin->oauth->user()->getOriginal();
        if (!empty($user)){
            session('wx_info',$user);
        }
        $this->redirect('index/index/index');
    }


}

