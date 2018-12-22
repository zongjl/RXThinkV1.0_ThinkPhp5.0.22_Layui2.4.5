<?php

/**
 * 友情链接-模型
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
use think\Config;
class LinkModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'link';
    
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
            
            // LOGO
            if($info['logo']) {
                $info['logo_url'] = IMG_URL . $info['logo'];
            }
            
            // 使用平台
            if($info['platform']) {
                $info['platform_name'] = Config::get('adminconfig.platform_type')[$info['platform']];
            }
            
            // 友链类型
            if($info['t_type']) {
                $info['t_type_name'] = Config::get('link_type')[$info['t_type']];
            }
            
        }
        return $info;
    }
    
}