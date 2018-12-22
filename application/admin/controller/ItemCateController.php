<?php

/**
 * 栏目-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\ItemCateModel;
use app\admin\service\ItemCateService;
class ItemCateController extends AdminBaseController
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
        $this->model = new ItemCateModel();
        $this->service = new ItemCateService();
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
        $pid = input("get.pid",0);
        if($pid) {
            $pInfo = $this->model->getInfo($pid);
        }
        
        //获取站点信息
        $itemList = db('item')->where(['status'=>1,'mark'=>1])->select();
        $this->assign('itemList',$itemList);
        
        return parent::edit([
            'parent_id'=>$pid,
            'parent_name'=>$pInfo['name'],
        ]);
    }
    
    /**
     * 获取子级栏目【挂件专用】
     * 
     * @author zongjl
     * @date 2018-12-13
     */
    function getChilds()
    {
        if(IS_POST) {
            $message = $this->service->getChilds();
            return $message;
        }
    }
    
}