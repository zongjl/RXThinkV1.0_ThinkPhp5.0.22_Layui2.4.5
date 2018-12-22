<?php

/**
 * 职位-模型
 * 
 * @author zongjl
 * @date 2018-12-11
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class AdminPositionModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'admin_position';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-11
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info) {
            //TODO...
        }
        return $info;
    }
    
}