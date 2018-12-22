<?php

/**
 * 后台常用配置
 * 
 * @author zongjl
 * @date 2018-12-11
 */
return [
    
    // 性别
    'gender_list' => array(
        1 => '男',
        2 => '女',
        3 => '保密'
    ),
    
    // 支付方式
    'pay_type'=>array(
        1 => '支付宝',
        2 => '微信',
        3 => '其他',
    ),
    
    // 是否菜单
    'is_menu' => array(
        1 => '是',
        2 => '否',
    ),
    
    // 菜单类型
    'menu_type'=>array(
        1 => '模块',
        2 => '导航',
        3 => '菜单',
        4 => '节点',
    ),
    
    // 状态
    'status_list'  => array(
        1 => '在用',
        2 => '停用',
    ),
    
    // 审核状态
    'check_status_list' =>array(
        1 => '待审核',
        2 => '审核通过',
        3 => '审核失败',
    ),
    
    // 设备类型
    'device_type'=>array(
        1 => '苹果',
        2 => '安卓',
    ),
    
    // 站点类型
    'item_type'=>array(
        1 => '普通站点',
        2 => '其他',
    ),
    
    // 平台类型
    'platform_type'=>array(
        1 => 'APP端',
        2 => 'WAP端',
        3 => 'PC端',
    ),
    
    //广告类型
    'ad_type'=>array(
        1 => '图片',
        2 => '文字',
        3 => '视频',
        4 => '推荐',
    ),
    
    // 系统推荐类型(适用于：布局、广告)
    'system_recomm_type'=>array(
        1 => 'CMS文章',
        2 => '其他',
    ),
    
    // 友链类型
    'link_category'=>array(
        1 => '友情链接',
        2 => '合作伙伴',
    ),
    
    // 友链类型
    'link_type'=>array(
        1 => '文字',
        2 => '图片',
    ),
    
    // 配置类型
    'system_config_type'=>array(
        1 => '单行文本',
        2 => '多行文本',
        3 => '富文本',
        4 => '单张图片',
        5 => '多张图集',
    ),
    
    // 版本类型
    'version_type'=>array(
        1 => '用户版',
        2 => '老师版',
    ),
    
];