<?php

/**
 * 用户-控制器
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\controller;
use app\admin\model\UserModel;
use app\admin\service\UserService;
class UserController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-14
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new UserModel();
        $this->service = new UserService();
    }
    
    /**
     * 设置会员状态
     * 
     * @author zongjl
     * @date 2018-12-14
     */
    function setStatus()
    {
        if(IS_POST) {
            $message = $this->service->setStatus();
            return $message;
        }
    }
    
}