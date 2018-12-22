<?php

/**
 * 后台主页-控制器
 * 
 * @author zongjl
 * @date 2018-12-10
 */
namespace app\admin\controller;
class IndexController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    public function __construct() 
    {
        parent::__construct();
    }
    
    /**
     * 后台主页
     * 
     * @author zongjl
     * @date 2018-12-10
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::index()
     */
    public function index()
    {
        return $this->fetch();
    }

}