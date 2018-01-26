<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        //trace(session('wx_info'));
        $info = session('wx_info');
        $cate_add = db('wuserinfo')->insert($info);
        if ($cate_add) {
            //  $this->success('添加成功','index/add');
            $this->redirect('index/add');
        }
    }

    /*报名添加显示界面*/
    public function add()
    {

      //  $options=config('wechat');
      //  $weObj = new\utild\Jssdk($options['appid'],$options['']),

        /*---------------
         * 短信发送配置
         * -------------*/
        $sms = new \PFinal\Aliyun\AliyunSMS();
        $sms->accessKeyId = 'LTAIvJQsPllDDD6T';
        $sms->accessKeySecret = 'P8kUwG3FwIwsOcFi050YpmAgQSELeZ';
        $sms->signName = '飛宇集團';
        $sms->templateId = 'SMS_113455288';
        $sms->templateCodeKey = '模板中验证码对应占位符';

        $mysql = db('wxapply');
        if (request()->isPost()) {
            //  $data = input('post.');
            //if($mysql->add($data)){  不要用add
            $info = session('wx_info');
            $data = [       //接受传递的参数
                'wxapply_name' => input('wxapply_name'),
                'wxapply_phone' => input('wxapply_phone'),
                'wxapply_company' => input('wxapply_company'),
                'openid' => $info['openid'],
                'nickname' => $info['nickname'],
                'addtime' => date("Y-m-d"),
                'time' => time(),
            ];
            $where = array(
                'wxapply_phone' => input('wxapply_phone'),
            );
            $findphone=$mysql->where($where)->find();
            if($findphone){
                return json(array('code' => 0, 'msg' => '此号码已经报名'));
            }
            if ($mysql->insert($data)) {
               $phone=$data['wxapply_phone'];
                //发普通模板短信
               $sms->templateSMS($phone,'SMS_113455288','');//报名成功发送短信通知
                return json(array('code' => 200, 'msg' => '恭喜你报名成功'));
            } else {
                return json(array('code' => 0, 'msg' => '添加失败'));
            }
        }
        return view();
    }
}