<?php

/**
 * 组织机构-控制器
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\model\AdminOrgModel;
use app\admin\service\AdminOrgService;
use think\Db;
class AdminOrgController extends AdminBaseController
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
        $this->model = new AdminOrgModel();
        $this->service = new AdminOrgService();
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
            $count = Db::name("admin")->where(['organization_id'=>$id])->count();
            if($count) {
                return message("当前组织机构已经在使用中，无法删除",false);
            }
            return parent::drop();
        }
    }
    
}