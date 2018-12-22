<?php

/**
 * 角色|人员|菜单-模型
 * 
 * @author zongjl
 * @date 2018-12-10
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class AdminRomModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'admin_rom';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-10
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