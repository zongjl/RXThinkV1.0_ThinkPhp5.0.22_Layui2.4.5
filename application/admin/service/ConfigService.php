<?php

/**
 * 配置-服务类
 * 
 * @author zongjl
 * @date 2018-12-14
 */
namespace app\admin\service;
use app\admin\model\ServiceModel;
use app\admin\model\ConfigModel;
class ConfigService extends ServiceModel
{
    /**
     * 初始化模型
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::initialize()
     */
    function initialize()
    {
        parent::initialize();
        $this->model = new ConfigModel();
    }
    
    /**
     * 获取数据列表
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::getList()
     */
    function getList()
    {
        $param = input("request.");
        
        $map = [];
        
        //查询条件
        $name = trim($param['name']);
        if($name) {
            $map['name'] = array('like',"%{$name}%");
        }
        
        return parent::getList($map);
    }
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-14
     * (non-PHPdoc)
     * @see \app\admin\model\ServiceModel::edit()
     */
    function edit()
    {
        $data = input('post.', '', 'trim');
        //数据类型：1单行文本 2多行文本 3富文本 4图片 5图片集
        $type = (int)$data['type'];
        switch ($type) {
            case 1: {
                //单行文本
                $content = $data['content1'];
        
                break;
            }
            case 2: {
                //多行文本
                $content = $data['content2'];
        
                break;
            }
            case 3: {
                //富文本
                $content = $data['content3'];
        
                break;
            }
            case 4: {
                //单张图片
                $image = $data['image'];
                if(!$data['id'] && !$image) {
                    return message('请上传图片',false);
                }
                //封面处理
                if(strpos($image, "temp")) {
                    $content = \Common::saveImage($image, 'config');
                }
        
                break;
            }
            case 5: {
                //多张图集
        
                $imgsList = trim($data['imgs']);
                if($imgsList) {
                    $imgArr = explode(',', $imgsList);
                    foreach ($imgArr as $key => $val) {
                        if(strpos($val, "temp")) {
                            //新上传图片
                            $imgStr[] = \Common::saveImage($val, 'config');
                        }else{
                            //过滤已上传图片
                            $imgStr[] = str_replace(IMG_URL, "", $val);
                        }
                    }
                }
                $content = serialize($imgStr);
        
                break;
            }
        }
        
        //置空临时参数
        unset($data['content1']);
        unset($data['content2']);
        unset($data['content3']);
        unset($data['image']);
        unset($data['imgs']);
        unset($data['file']);
        
        $data['content'] = $content;
        return parent::edit($data);
    }
    
}