<?php

/**
 * 配置-模型
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\model;
use app\common\model\CBaseModel;
use think\Config;
class ConfigModel extends CBaseModel
{
    // 设置数据表
    protected $name = 'config';
    
    /**
     * 获取缓存信息
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\common\model\CBaseModel::getInfo()
     */
    function getInfo($id)
    {
        $info = parent::getInfo($id);
        if($info) {
            
            // 类型名称
            $info['type_name'] = Config::get('adminconfig.system_config_type')[$info['type']];
            
            // 类型解析
            if($info['content']) {
                if($info['type']==4) {
                    //单图
                    $info['image_url'] = IMG_URL . $info['content'];
                }else if($info['type']==5) {
                    //图集
                    $imgsList =  unserialize($info['content']);
                    foreach ($imgsList as &$row) {
                        $row = IMG_URL . $row;
                    }
                    $info['imgsList'] = $imgsList;
                }
            }
            
            // 分组名称
            if($info['group_id']) {
                $groupMod = new ConfigGroupModel();
                $groupInfo = $groupMod->getInfo($info['group_id']);
                $info['group_name'] = $groupInfo['name'];
            }
            
        }
        return $info;
    }
    
}