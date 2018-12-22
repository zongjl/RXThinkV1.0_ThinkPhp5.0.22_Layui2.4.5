<?php

/**
 * 功能节点-挂件
 * 
 * @author zongjl
 * @date 2018-12-10
 */
namespace app\admin\widget;
class FuncNodeWidget extends BaseWidget
{
    /**
     * 构造方法
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 添加节点【全局导航】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnAdd($funcName,$param=[]) {
        $this->assign('param',json_encode($param));
        return $this->btnFunc("add", '&#xe654;', $funcName);
    }
    
    /**
     * 批量删除节点【全局导航】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnDAll($funcName) {
        return $this->btnFunc("batchDrop", '&#xe640;', $funcName,"layui-btn-danger");
    }
    
    /**
     * 常用按钮【全局导航】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnFunc($funcAct,$funcIcon,$funcName,$funcColor='',$funcType=1,$param=[]) {
        $this->assign('funcAct',$funcAct);
        $this->assign('funcIcon',$funcIcon);
        $this->assign('funcName',$funcName);
        $this->assign('funcColor',$funcColor);
        $this->assign('funcType',$funcType);
        if($param) {
            $this->assign('param',json_encode($param));
        }
        return $this->fetch('widget/funcNode/func');
    }
    
    /**
     * 添加节点【行数据】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnAdd2() {
        return $this->fetch("widget/funcNode/add");
    }
    
    /**
     * 编辑节点【行数据】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnEdit($funcName) {
        $this->assign('funcName',$funcName);
        return $this->fetch("widget/funcNode/edit");
    }
    
    /**
     * 删除节点【行数据】
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    function btnDel($funcName) {
        $this->assign('funcName',$funcName);
        return $this->fetch("widget/funcNode/drop");
    }
    
    /**
     * 查看详情【行数据】
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnDetail($funcName) {
        $this->assign('funcName',$funcName);
        return $this->fetch("widget/funcNode/detail");
    }
    
    /**
     * 设置权限
     *
     * @author zongjl
     * @date 2018-12-10
     */
    function btnSetAuth($funcName) {
        $this->assign('funcName',$funcName);
        return $this->fetch("widget/funcNode/auth");
    }
}