<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 自定义配置文件目录
define('CONF_PATH', __DIR__ . '/../config/');

// 自定义扩展文件目录
define('EXTEND_PATH', __DIR__ . '/../extend/');

// 绑定模块
define('BIND_MODULE', 'admin');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

// // 读取自动生成定义文件
// $build = include '/../build.php';
// // 运行自动生成
// \think\Build::run($build,'app',true);
