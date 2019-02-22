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
 * 后台主页-控制器
 * 
 * @author 牧羊人
 * @date 2018-12-10
 */
namespace app\admin\controller;
class IndexController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author 牧羊人
     * @date 2018-12-10
     */
    public function __construct() 
    {
        parent::__construct();
    }
    
    /**
     * 后台主页
     * 
     * @author 牧羊人
     * @date 2018-12-10
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::index()
     */
    public function index()
    {
        return $this->fetch();
    }
    
    /**
     * 欢迎页主页
     * 
     * @author 牧羊人
     * @date 2019-01-09
     */
    public function main() 
    {
        return $this->fetch();
    }

}