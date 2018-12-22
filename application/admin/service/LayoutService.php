<?php

/**
 * 布局-服务类
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\LayoutModel;
class LayoutService extends ServiceModel
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
        $this->model = new LayoutModel();
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
        return parent::getList();
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
        if(!$data['id'] && !$image) {
            return message('请上传封面',false);
        }
        if(strpos($image, "temp")) {
            $data['image'] = \Common::saveImage($image, 'layout');
        }
        return parent::edit($data);
    }
    
}