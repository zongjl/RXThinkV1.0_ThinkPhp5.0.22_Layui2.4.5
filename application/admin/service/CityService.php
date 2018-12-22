<?php

/**
 * 城市-服务类
 * 
 * @author zongjl
 * @date 2018-12-12
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\CityModel;
class CityService extends ServiceModel
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
        $this->model = new CityModel();
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
        $list = $this->model->getAll();
        return message("操作成功",true,$list);
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
        $data['is_public'] = (isset($data['is_public']) && $data['is_public']=="on") ? 1 : 2;
        
        //获取级别
        $parentId = (int)$data['parent_id'];
        if($parentId) {
            $info = $this->model->getInfo($data['parent_id']);
            $data['level'] = $info['level']+1;
        }
        $error = '';
        $rowId = $this->model->edit($data,$error);
        if($rowId) {
            //重置缓存
            $this->model->resetCacheFunc('"all"');
            return message();
        }
        return message($error,false);
    }
    
}