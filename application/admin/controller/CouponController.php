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
 * 优惠券-控制器
 * 
 * @author 牧羊人
 * @date 2019-01-27
 */
namespace app\admin\controller;
use app\admin\model\CouponModel;
use app\admin\service\CouponService;
class CouponController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author 牧羊人
     * @date 2019-01-27
     */
    function __construct() 
    {
        parent::__construct();
        $this->model = new CouponModel();
        $this->service = new CouponService();
    }
    
}