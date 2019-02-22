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
 * 布局描述-挂件
 * 
 * @author 牧羊人
 * @date 2018-12-14
 */
namespace app\admin\widget;
class LayoutDescWidget extends BaseWidget
{
    /**
     * 构造方法
     * 
     * @author 牧羊人
     * @date 2018-12-14
     */
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 布局描述选择
     * 
     * @author 牧羊人
     * @date 2018-12-14
     */
    function select($pageId, $locId, $limit=2)
    {
        $layoutDescArr = array(
            1 => array('tname' => '站点', 'code' => 'page'),
            2 => array('tname' => '页面位置', 'code' => 'loc'),
        );
        $result = db("layoutDesc")->where(['page_id'=>$pageId,'mark'=>1])->column('id,page_id,loc_id,loc_desc');
        $subItem = array();
        if(is_array($result)) {
            foreach ($result as $k => $v){
                $subItem[$v['loc_id']]['id'] = $v['loc_id'];
                $subItem[$v['loc_id']]['name'] = $v['loc_desc'];
            }
        }
        
        //获取站点
        $itemList = db("item")->where(['status'=>1,'mark'=>1])->column('id,name');
        $layoutDescArr[1]['list'] = $itemList;
        $layoutDescArr[1]['selected'] = $pageId;
        $layoutDescArr[2]['list'] = $subItem;
        $layoutDescArr[2]['selected'] = $locId;
        $layoutDescArr = array_slice($layoutDescArr, 0, $limit);
        $this->assign('layoutDescList', $layoutDescArr);
        return $this->fetch("layout_desc/widget_select");
    }
    
}