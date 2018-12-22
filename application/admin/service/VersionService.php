<?php

/**
 * 版本管理-服务类
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\VersionModel;
class VersionService extends ServiceModel
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
        $this->model = new VersionModel();
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
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::edit()
     */
    function edit()
    {
        $data = input('post.', '', 'trim');
        $data['is_update'] = (isset($data['is_update']) && $data['is_update']=="on") ? 1 : 2;
        $data['is_force'] = (isset($data['is_force']) && $data['is_force']=="on") ? 1 : 2;
        return parent::edit($data);
    }
    
}