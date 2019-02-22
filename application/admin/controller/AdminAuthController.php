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
 * 权限设置-控制器
 * 
 * @author 牧羊人
 * @date 2018-12-12
 */
namespace app\admin\controller;
use app\admin\service\AdminAuthService;
class AdminAuthController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author 牧羊人
     * @date 2018-12-12
     */
    function __construct()
    {
        parent::__construct();
        $this->service = new AdminAuthService();
    }
    
    /**
     * 获取数据列表
     * 
     * @author 牧羊人
     * @date 2018-12-12
     * (non-PHPdoc)
     * @see \app\admin\controller\AdminBaseController::index()
     */
    function index()
    {
        if(IS_POST) {
            $message = $this->service->getList();
            return $message;
        }
        
        // 参数
        $type = input("get.type",0);
        $typeId = input("get.type_id",0);
        $this->assign('type',$type);
        $this->assign("type_id",$typeId);
        return $this->render();
    }
    
    /**
     * 保存权限设置
     * 
     * @author 牧羊人
     * @date 2018-12-13
     */
    function setAuth()
    {
        if(IS_POST) {
            $message = $this->service->setAuth();
            return $message;
        }
    }
    
}