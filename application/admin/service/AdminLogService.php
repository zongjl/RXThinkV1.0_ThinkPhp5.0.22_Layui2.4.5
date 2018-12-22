<?php

/**
 * 管理员登录日志-模型
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\AdminLogModel;
class AdminLogService extends ServiceModel
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
        $this->model = new AdminLogModel();
    }
    
}