<?php

//定义域名常量
define('MAIN_URL','http://main.kivii.com');
define('SITE_URL','http://www.kivii.com');
define('WAP_URL','http://h5.kivii.com');
define('API_URL','http://api.kivii.com');
define('IMG_URL','http://images.kivii.com');
define('ATTACHMENT_PATH', 'D:/xampp/htdocs/Kivii/TPV5.0/public/uploads');
define('IMG_PATH', ATTACHMENT_PATH."/img");
define('UPLOAD_TEMP_PATH', IMG_PATH . '/temp');

//配置文件
return [
    // 企业全称
    'site_name'     => '企业框架V2.0',
    // 企业简称
    'nick_name'     => '企业框架V2.0',
    // 数据库链接
    'db_config'     => 'mysql://root:111111@127.0.0.1:3306/kivii',
    // 数据表前缀
    'db_prefix'     => 'yk_',
    // 数据库编码
    'db_charset'    => 'utf8mb4',
    // 缓存驱动类型及链接
    'cache_config'  =>'redis://:@127.0.0.1:6379/1',
    // 缓存前缀
    'cache_key'     => 'Kv',
    // 上传参数配置
    'upload'        => [
        //上传图片参数配置
        'image_config'  => [
            // 图片后缀限制
            'upload_image_ext'  => 'jpg|png|gif|bmp|jpeg',
            // 最大上传文件大小(默认：10MB)
            'upload_image_size' => 1024*10,
            // 最大上传数量限制(默认：9张)
            'upload_image_max'  => 9,
        ],
        //上传视频参数配置
        'video_config'  => [
            // 视频后缀限制
            'upload_video_ext'  => 'mp4|avi|mov|rmvb|flv',
            // 最大上传文件大小(默认：10MB)
            'upload_video_size' => 1024*10,
            // 最大上传数量限制(默认：3个)
            'upload_video_max'  => 3,
        ],
    ],
];