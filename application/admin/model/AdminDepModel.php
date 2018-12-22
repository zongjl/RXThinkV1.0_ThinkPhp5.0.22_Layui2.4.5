<?php

/**
 * 部门-模型
 * 
 * @author zongjl
 * @date 2018-12-11
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
class AdminDepModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'admin_dep';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-11
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info) {
            
            //获取上级部门
            if($info['parent_id']) {
                $pInfo = $this->getInfo($info['parent_id']);
                $info['parent_name'] = $pInfo['name'];
            }
            
        }
        return $info;
    }
    
    /**
     * 获取子级部门
     * 
     * @author zongjl
     * @date 2018-12-11
     */
    function getChilds($parentId, $flag=false) 
    {
        $map = [
            'parent_id' =>$parentId,
            'mark' =>1,
        ];
        $result = $this->where($map)->order("sort_order asc")->select();
        if($result) {
            foreach ($result as $val) {
                $id = (int)$val['id'];
                $info = $this->getInfo($id);
                if(!$info) continue;
                if($flag) {
                    $childList = $this->getChilds($id,0);
                    $info['children'] = $childList;
                }
                $list[] = $info;
            }
        }
        return $list;
    }
    
    /**
     * 获取部门名称
     * 
     * @author zongjl
     * @date 2018-12-11
     */
    function getDepName($depId, $delimiter="")
    {
        do {
            $info = $this->getInfo($depId);
            $names[] = $info['name'];
            $depId = $info['parent_id'];
        } while($depId>1);
        $names = array_reverse($names);
        return implode($delimiter, $names);
    }
    
}