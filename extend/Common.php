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
 * 自定义系统工具类
 * 
 * @author 牧羊人
 * @date 2018-12-10
 */
// namespace tools;
class Common
{
    /**
     * 获取加密密码
     * 
     * @author 牧羊人
     * @date 2018-12-10
     */
    public static function getPassWord($password)
    {
        return md5(md5($password));
    }
    
    /**
     * 保存图片
     * 
     * @author 牧羊人
     * @date 2018-12-12
     */
    public static function saveImage($imgUrl, $saveDir="/")
    {
        if(!$imgUrl) {
            return false;
        }
        $saveDir = trim($saveDir, "/");
        $imgExt = pathinfo($imgUrl, PATHINFO_EXTENSION);
        // 是否是本站图片
        if (strpos($imgUrl, IMG_URL)!==false) {
            // 是否是临时文件
            if (strpos($imgUrl, 'temp') === false) {
                return str_replace(IMG_URL, "", $imgUrl);
            }
            $newPath = self::createImagePath($saveDir, $imgExt);
            $oldPath = str_replace(IMG_URL, IMG_PATH , $imgUrl);
            if (!file_exists($oldPath)) {
                return false;
            }
            rename($oldPath, IMG_PATH.$newPath);
            return $newPath;
        }else{
            // 保存远程图片
            $newPath = self::saveFileByUrl($imgUrl,$saveDir);
        }
        return $newPath;
    }
    
    /**
     * 创建文件存储路径
     * 
     * @author 牧羊人
     * @date 2018-12-12
     */
    public static function createImagePath($prefix="", $ext="", $root=IMG_PATH)
    {
        $fileDir = date("/Y/m/d/H");
        if($fileDir) {
            $fileDir = ($prefix ? "/" : '') . $prefix . $fileDir;
        }
        // 未指定后缀默认使用JPG
        if(!$ext) {
            $ext = "jpg";
        }
        $absImgPath = $root . $fileDir;
        if(!is_dir($absImgPath)) {
            // 创建目录并赋予权限
            mkdir($absImgPath, 0777, true);
        }
        $filename = substr(md5(time().rand(0,999999)),8, 16).rand(100,999).".{$ext}";
        $filePath = $fileDir . "/" . $filename;
        return $filePath;
    }
    
    /**
     * 保存远程网络图片
     * 
     * @author 牧羊人
     * @date 2018-12-12
     */
    public static function saveFileByUrl($imgUrl, $saveDir='/')
    {
        $content = file_get_contents($imgUrl);
        if(!$content) {
            return false;
        }
        if($content{0} . $content{1} == "\xff\xd8") {
            $imgExt = 'jpg';
        }else if ($content{0} . $content{1} . $content{2} == "\x47\x49\x46") {
            $imgExt = 'gif';
        }else if ($content{0} . $content{1} . $content{2} == "\x89\x50\x4e") {
            $imgExt = 'png';
        }else{
            // 不是有效图片
            return false;
        }
        $savePath = self::createImagePath($saveDir, $imgExt);
        return file_put_contents(IMG_PATH . $savePath, $content) ? $savePath : false ;
    }
    
}