<?php

/**
 * 用户-模型
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class UserModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'user';
    
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
            
            // 头像
            if($info['avatar']) {
                $info['avatar_url'] = IMG_URL . $info['avatar'];
            }
            
        }
        return $info;
    }
    
}