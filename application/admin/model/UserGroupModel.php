<?php

/**
 * 用户分组-模型
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class UserGroupModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'user_group';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-14
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