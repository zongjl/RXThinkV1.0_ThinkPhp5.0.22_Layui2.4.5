<?php

/**
 * 空控制器
 * 
 * @author zongjl
 * @date 2018-12-08
 */
namespace app\admin\controller;
class EmptyController extends AdminBaseController {
    
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 空控制器入口
     * 
     * @author zongjl
     * @date 2018-12-08
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::index()
     */
    function index() 
    {
        return $this->render("public/404");
    }
}