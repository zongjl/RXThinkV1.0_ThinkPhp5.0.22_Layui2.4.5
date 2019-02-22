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
 * 优惠券-模型
 * 
 * @author 牧羊人
 * @date 2019-01-27
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class CouponModel extends CBaseModel 
{
    // 设置数据表
    protected $name = 'coupon';
    
    /**
     * 获取缓存信息
     * 
     * @author 牧羊人
     * @date 2019-01-27
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info)
        {
            
            //TODO...
            
        }
        return $info;
    }
    
}