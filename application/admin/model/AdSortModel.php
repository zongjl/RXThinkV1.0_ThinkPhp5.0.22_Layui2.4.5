<?php

/**
 * 广告位-模型
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
use think\Config;
class AdSortModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'ad_sort';
    
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
            
            // 获取站点
            if($info['item_id']) {
                $itemMod = new ItemModel();
                $itemInfo = $itemMod->getInfo($info['item_id']);
                $info['item_name'] = $itemInfo['name'];
            }
            
            // 获取栏目
            if($info['cate_id']) {
                $cateMod = new ItemCateModel();
                $cateName = $cateMod->getCateName($info['cate_id'],">>");
                $info['cate_name'] = $cateName;
            }
            
            // 使用平台
            if($info['platform']) {
                $info['platform_name'] = Config::get('adminconfig.platform_type')[$info['platform']];
            }
            
        }
        return $info;
    }
    
}