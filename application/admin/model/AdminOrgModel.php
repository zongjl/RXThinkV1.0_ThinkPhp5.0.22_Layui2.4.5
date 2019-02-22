<?php
// +----------------------------------------------------------------------
// | RXThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://rxthink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 牧羊人 <rxthink@gmail.com>
// +----------------------------------------------------------------------

/**
 * 组织机构-模型
 * 
 * @author 牧羊人
 * @date 2018-12-11
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class AdminOrgModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'admin_org';
    
    /**
     * 获取缓存信息
     * 
     * @author 牧羊人
     * @date 2018-12-11
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info) {
            
            // 组织机构LOGO
            if($info['logo']) {
                $info['logo_url'] = IMG_URL . $info['logo'];
            }
            
            // 获取所属城市
            if($info['district_id']) {
                $cityMod = new CityModel();
                $cityName = $cityMod->getCityName($info['district_id'],">>",true);
                $info['city_name'] = $cityName;
            }
            
        }
        return $info;
    }
    
}