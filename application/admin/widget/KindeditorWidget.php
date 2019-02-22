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
 * 富文本编辑器-挂件
 * 
 * @author 牧羊人
 * @date 2018-12-13
 */
namespace app\admin\widget;
class KindeditorWidget extends BaseWidget
{
    /**
     * 构造方法
     * 
     * @author 牧羊人
     * @date 2018-12-13
     */
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 获取编辑器
     * 
     * @author 牧羊人
     * @date 2018-12-13
     */
    function getEditor($type, $kindeditorId, $width, $height)
    {
        $width = isset($width) ? $width : 900;
        $height = isset($height) ? $height :500;
        
        $rootUrl = str_replace('http://www.', '', trim(SITE_URL, '/'));
        $this->assign('kindeditor_content',trim($_GET['component']));
        $this->assign('rootUrl',$rootUrl);
        $this->assign('type',$type);
        $this->assign('kindeditorId',$kindeditorId);
        $this->assign('width',$width);
        $this->assign('height',$height);
        return $this->fetch('widget/kindeditor_getEditor');
    }
    
}