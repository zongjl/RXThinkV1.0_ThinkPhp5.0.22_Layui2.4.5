<?php

/**
 * 部门-控制器
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\model\AdminDepModel;
use app\admin\service\AdminDepService;
class AdminDepController extends AdminBaseController
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
        $this->model = new AdminDepModel();
        $this->service = new AdminDepService();
    }
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::edit()
     */
    function edit()
    {
        $pid = input("get.pid",0);
        if($pid) {
            $info = $this->mod->getInfo($pid);
        }
        return parent::edit([
            'parent_id'=>$pid,
            'parent_name'=>$info['name'],
        ]);
    }
    
}