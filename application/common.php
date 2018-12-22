<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// 关闭任何警告和错误
// error_reporting(0);
\think\Config::get('app_debug') && error_reporting(E_ERROR | E_PARSE);

/**
 * 返回消息对象
 * 
 * @author zongjl
 * @date 2018-12-10
 */
if (defined('IS_API')) 
{
    function message($msg = "系统繁忙，请稍候再试" , $success = false , $data = array(), $code=0){
        $msg =  array("success" => $success , "msg" => $msg , "data" => $data);
        if($msg['success']) {
            $msg['code'] = 10000;
        }else {
            $msg['code'] = $code ? $code : 90000;
        }
        return $msg;
    }
}else{
    function message($msg = "操作成功" , $success = true , $data = array()){
        $msg =  array("success" => $success , "msg" => $msg , "data" => $data);
        return $msg;
    }
}

/**
 * 下拉选择组件
 *
 * @author zongjl
 * @date 2018-12-11
 */
function make_option($data, $selected=0, $show_field='name', $val_field='id')
{
    $html = '';
    $show_field_arr = explode(',', $show_field);
    if(is_array($data)) {
        foreach ($data as $k => $v) {
            $show_text = '';
            if (is_array( $v )) {
                foreach ($show_field_arr as $s) {
                    $show_text .= $v[$s].' ';
                }
                $show_text = substr($show_text, 0, -1);
                $val_field && $k = $v[$val_field];
            } else {
                $show_text = $v;
            }
            $sel = '';
            if ($selected && $k == $selected) {
                $sel = 'selected';
            }
            $html .= '<option value =' . $k . ' ' . $sel . '>' . $show_text . '</option>';
        }
    }
    return $html;
}

/**
 * 发送短信
 * 
 * @author zongjl
 * @date 2018-12-08
 */
function send_sms()
{
    
}

/**
 * 发送邮件
 * 
 * @author zongjl
 * @date 2018-12-08
 */
function send_email()
{
    
}