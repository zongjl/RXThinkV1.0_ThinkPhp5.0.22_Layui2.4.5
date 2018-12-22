<?php

/**
 * 挂件基类
 * 
 * @author zongjl
 * @date 2018-12-10
 */
namespace app\admin\widget;
use think\Controller;
class BaseWidget extends Controller
{
    // 模型、服务
    protected $model,$service;
    
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-12
     */
    function __construct()
    {
        parent::__construct();
        //TODO...
    }
    
}