<?php

/**
 * 部门-服务类
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\AdminDepModel;
class AdminDepService extends ServiceModel
{
    /**
     * 初始化模型
     * 
     * @author zongjl
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::initialize()
     */
    function initialize()
    {
        parent::initialize();
        $this->model = new AdminDepModel();
    }
    
    /**
     * 获取数据列表
     * 
     * @author zongjl
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::getList()
     */
    function getList()
    {
        $list = $this->model->getChilds(0,1);
        return message('操作成功',true,$list);
    }
    
}