<?php

/**
 * 城市-控制器
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\model\CityModel;
use app\admin\service\CityService;
class CityController extends AdminBaseController
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
        $this->model = new CityModel();
        $this->service = new CityService();
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
            $cityInfo = $this->model->find($pid);
            $this->assign('parent_name',$cityInfo['name']);
        }
        return parent::edit([
            'parent_id'=>$pid,
            'parent_name'=>$cityInfo['name'],
        ]);
    }
    
    /**
     * 获取子级城市【挂件专用】
     * 
     * @author zongjl
     * @date 2018-12-12
     */
    function getChilds()
    {
        if(IS_POST) {
            $id = input("post.id",0);
            $list = $this->model->getChilds($id);
            return message('操作成功',true,$list);
        }
    }
    
}