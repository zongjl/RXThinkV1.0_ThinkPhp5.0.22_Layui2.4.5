<?php

/**
 * 配置-控制器
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\controller;
use app\admin\model\ConfigModel;
use app\admin\service\ConfigService;
class ConfigController extends AdminBaseController
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
        $this->model = new ConfigModel();
        $this->service = new ConfigService();
    }
    
}