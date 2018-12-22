<?php

/**
 * 管理员登录-控制器
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\model\AdminLogModel;
use app\admin\service\AdminLogService;
class AdminLogController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-12
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new AdminLogModel();
        $this->service = new AdminLogService();
    }
}