<?php

/**
 * 用户分组-控制器
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\controller;
use app\admin\model\UserGroupModel;
use app\admin\service\UserGroupService;
class UserGroupController extends AdminBaseController
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
        $this->model = new UserGroupModel();
        $this->service = new UserGroupService();
    }
    
}