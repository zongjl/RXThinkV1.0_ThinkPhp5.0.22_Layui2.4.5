<?php

/**
 * 版本管理-控制器
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\controller;
use app\admin\model\VersionModel;
use app\admin\service\VersionService;
class VersionController extends AdminBaseController
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
        $this->model = new VersionModel();
        $this->service = new VersionService();
    }
    
}