<?php

/**
 * 布局-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\LayoutModel;
use app\admin\service\LayoutService;
class LayoutController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-13
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new LayoutModel();
        $this->service = new LayoutService();
    }
    
}