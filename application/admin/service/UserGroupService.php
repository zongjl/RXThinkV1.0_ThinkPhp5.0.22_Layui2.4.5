<?php

/**
 * 用户分组-服务类
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\UserGroupModel;
class UserGroupService extends ServiceModel
{
    /**
     * 初始化模型
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::initialize()
     */
    function initialize()
    {
        parent::initialize();
        $this->model = new UserGroupModel();
    }
    
}