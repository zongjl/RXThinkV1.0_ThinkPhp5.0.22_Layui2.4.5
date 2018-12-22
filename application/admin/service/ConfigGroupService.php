<?php

/**
 * 配置分组-服务类
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\ConfigGroupModel;
class ConfigGroupService extends ServiceModel
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
        $this->model = new ConfigGroupModel();
    }
    
    /**
     * 获取数据列表
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::getList()
     */
    function getList()
    {
        $param = input("request.");
        
        $map = [];
        
        //查询条件
        $name = trim($param['name']);
        if($name) {
            $map['name'] = array('like',"%{$name}%");
        }
        
        return parent::getList($map);
    }
    
}