<?php

/**
 * 布局描述-服务类
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\LayoutDescModel;
class LayoutDescService extends ServiceModel
{
    /**
     * 初始化模型
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::initialize()
     */
    function initialize()
    {
        parent::initialize();
        $this->model = new LayoutDescModel();
    }
    
    /**
     * 获取数据列表
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::getList()
     */
    function getList()
    {
        $param = input("request.");
        
        $map = [];
        
        //查询条件
        $keywords = trim($param['keywords']);
        if($keywords) {
            $map['loc_desc'] = array('like',"%{$keywords}%");
        }
        
        return parent::getList($map);
    }
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::edit()
     */
    function edit()
    {
        $data = input('post.', '', 'trim');
        $data['page_id'] = $data['item_id'];
        unset($data['item_id']);
        return parent::edit($data);
    }
    
}