<?php

/**
 * 广告-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\AdModel;
use app\admin\service\AdService;
class AdController extends AdminBaseController
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
        $this->model = new AdModel();
        $this->service = new AdService();
    }
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::edit()
     */
    function edit()
    {
        //获取广告位
        $sortList = db('adSort')->where(['mark'=>1])->select();
        $this->assign('sortList',$sortList);
        
        return parent::edit([
            't_type'=>1,
            'type'=>1,
        ]);
    }
    
}