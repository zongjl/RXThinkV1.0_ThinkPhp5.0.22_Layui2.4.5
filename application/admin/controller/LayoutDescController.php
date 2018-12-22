<?php

/**
 * 布局描述-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\LayoutDescModel;
use app\admin\service\LayoutDescService;
class LayoutDescController extends AdminBaseController
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
        $this->model = new LayoutDescModel();
        $this->service = new LayoutDescService();
    }
    
    /**
     * 删除数据
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::drop()
     */
    function drop()
    {
        if(IS_POST) {
            $id = input('post.id');
            $count = db("Layout")->where(["page_id"=>$id,'mark'=>1])->count();
            if($count>0) {
                return message("当前布局描述已经在使用,无法删除",false);
            }
            return parent::drop();
        }
    }
    
    /**
     * 获取子级【挂件专用】
     * 
     * @author zongjl
     * @date 2018-12-13
     */
    function getChilds()
    {
        if(IS_POST) {
            $itemId = input("post.item_id",0);
            $list = $this->model->getChilds($itemId);
            return message('获取成功',true,$list);
        }
    }
    
}