<?php

/**
 * 配置分组-控制器
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\controller;
use app\admin\model\ConfigGroupModel;
use app\admin\service\ConfigGroupService;
class ConfigGroupController extends AdminBaseController
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
        $this->model = new ConfigGroupModel();
        $this->service = new ConfigGroupService();
    }
    
}