<?php

/**
 * 友情链接-控制器
 * 
 * @author zongjl
 * @date 2018-12-13
 */
namespace app\admin\controller;
use app\admin\model\LinkModel;
use app\admin\service\LinkService;
class LinkController extends AdminBaseController
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-13
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new LinkModel();
        $this->service = new LinkService();
    }
    
}