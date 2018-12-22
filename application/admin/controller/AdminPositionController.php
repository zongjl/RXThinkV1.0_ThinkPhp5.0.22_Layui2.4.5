<?php

/**
 * 职位-控制器
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\model\AdminPositionModel;
use app\admin\service\AdminPositionService;
use think\Db;
class AdminPositionController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-12
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new AdminPositionModel();
        $this->service = new AdminPositionService();
    }
    
    /**
     * 删除数据
     * 
     * @author zongjl
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::drop()
     */
    function drop()
    {
        if(IS_POST) {
            $id = input('post.id');
            $count = Db::name("admin")->where(['position_id'=>$id])->count();
            if($count) {
                return message("当前职位已经在使用中，无法删除",false);
            }
            return parent::drop();
        }
    }
    
}