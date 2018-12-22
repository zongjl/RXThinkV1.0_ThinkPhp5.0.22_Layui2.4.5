<?php

/**
 * 缓存配置文件类
 * 
 * @author zongjl
 * @date 2018-12-11
 */
use think\Config;

// 获取缓存配置
$config = Config::get('config');
$cacheConfig = $config['cache_config'];
$cacheArr = explode('://:@', $cacheConfig);
$cache_type = strtolower($cacheArr[0]);
list($cache_host, $cache_port, $cache_db) = preg_split("/[:\/]/",$cacheArr[1]);

if($cache_type==='redis')
{
    return [
        // 驱动方式
        'type'   => 'redis',
        // 服务器地址
        'host'   => $cache_host,
        // 服务器端口号
        'port'   => $cache_port,
        // 密码
        'password' => '',
        // 超时时间（单位：毫秒）
        'timeout'=> 3600,
        // 缓存数据库库号
        'select'     => 1,
        // 缓存前缀
        'prefix' => $config['cache_key'] . "_",
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ];
}else if($cache_type==='memcache')
{
    return [
        // 驱动方式
        'type'   => 'memcache',
        // 服务器地址
        'host'   => $cache_host,
        // 服务器端口号
        'port'   => $cache_port,
        // 超时时间（单位：毫秒）
        'timeout'=> 3600,
        // 缓存前缀
        'prefix' => $config['cache_key'] . "_",
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ];
}else {
    return [
        // 驱动方式
        'type'   => 'File',
        // 缓存保存目录
        'path'   => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ];
}
