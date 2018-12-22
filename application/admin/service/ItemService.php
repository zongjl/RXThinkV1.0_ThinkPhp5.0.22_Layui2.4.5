<?php

/**
 * 站点-服务类
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\ItemModel;
class ItemService extends ServiceModel
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
        $this->model = new ItemModel();
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
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::edit()
     */
    function edit()
    {
        $data = input('post.', '', 'trim');
        $image = trim($data['image']);
        $data['is_domain'] = (isset($data['is_domain']) && $data['is_domain']=="on") ? 1 : 2;
        $data['status'] = (isset($data['status']) && $data['status']=="on") ? 1 : 2;
        
        if(!$data['id'] && !$image) {
            return message('请上传站点图片',false);
        }
        //图片处理
        if(strpos($image, "temp")) {
            $data['image'] = \Common::saveImage($image,'item');
        }
        
        return parent::edit($data);
    }
    
}