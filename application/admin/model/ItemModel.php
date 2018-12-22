<?php

/**
 * 站点-模型
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
use think\Config;
class ItemModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'item';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-13
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info) {
            
            // 图片地址
            if($info['image']) {
                $info['image_url'] = IMG_URL . $info['image'];
            }
            
            // 类型名称
            if($info['type']) {
                $info['type_name'] = Config::get('adminconfig.item_type')[$info['type']];
            }
            
        }
        return $info;
    }
    
}