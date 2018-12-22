<?php

/**
 * 组织机构-服务类
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\AdminOrgModel;
class AdminOrgService extends ServiceModel
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
        $this->model = new AdminOrgModel();
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
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::edit()
     */
    function edit()
    {
        $data = input('post.', '', 'trim');
        $logo = trim($data['logo']);
        
        //LOGO
        if(strpos($logo, "temp")) {
            $data['logo'] = \Common::saveImage($logo, 'adminOrg');
        }
        return parent::edit($data);
    }
    
}