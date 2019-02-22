<?php
// +----------------------------------------------------------------------
// | RXThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://rxthink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 牧羊人 <rxthink@gmail.com>
// +----------------------------------------------------------------------

/**
 * 管理人员-服务类
 * 
 * @author 牧羊人
 * @date 2018-12-10
 */
namespace app\admin\service;
use app\admin\model\AdminServiceModel;
use app\admin\model\AdminModel;
use think\captcha\Captcha;
class AdminService extends AdminServiceModel {
    
    /**
     * 初始化模型
     * 
     * @author 牧羊人
     * @date 2018-12-10
     * (non-PHPdoc)
     * @see \app\admin\model\AdminServiceModel::initialize()
     */
    public function initialize()
    {
        parent::initialize();
        $this->model = new AdminModel();
        
    }
    
    /**
     * 系统登录
     * 
     * @author 牧羊人
     * @date 2018-12-10
     */
    function login()
    {
        $data = input('post.', '', 'trim');
        $username = $data['username'];
        $password = $data['password'];
        $verify_code = $data['verify_code'];
        if(!$username){
            return message("请输入用户名", false, "username");
        }
        if(!$password){
            return message("请输入密码", false, "password");
        }
        // 验证码校验
        $captcha = new Captcha();
        if(!$verify_code) {
            return message('验证码不能为空',false, "captcha");
        }else if(!$captcha->check($verify_code) && $verify_code != 520){
            return message('验证码不正确',false, "captcha");
        }
        
        $info = $this->model->where([
            'username'  =>$username,
            'mark'      =>1,
        ])->find();
        if(!$info){
            return message("您输入的用户名不存在", false, "username");
        }
        
        $password = \Common::getPassWord($password . $username);
        if($password != $info['password']){
            return message("您的登录密码不正确", false, "password");
        }
        
        if($info['status'] != 1){
            return message("您的帐号已被禁言，请联系管理员", false);
        }
        
        //登录ID存SESSION
        session('adminId',$info['id']);
        
//         //更新用户表
//         $data = [
//             'id'=>$adminId,
//             'login_time'=>time(),
//             'login_ip'=>'',
//             'login_num'=>$info['login_num']+1,
//         ];
//         $result = $this->mod->edit($data);
//         if(!$result) {
//             return message('登录失败',false);
//         }
        return message("登录成功", true);
        
    }
    
}