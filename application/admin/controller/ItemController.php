<?php

/**
 * 站点-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\ItemCateModel;
use app\admin\model\ItemModel;
use app\admin\service\ItemService;
class ItemController extends AdminBaseController
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
        $this->model = new ItemModel();
        $this->service = new ItemService();
    }
    
    /**
     * 删除数据
     * 
     * @author zongjl
     * @date 2018-12-13(non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::drop()
     */
    function drop()
    {
        if(IS_POST) {
            $id = input('post.id');
            $itemCateMod = new ItemCateModel();
            $count = $itemCateMod->where(["item_id"=>$id,'mark'=>1])->count();
            if($count>0) {
                return message("当前站点已经在使用,无法删除",false);
            }
            return parent::drop();
        }
    }
    
}