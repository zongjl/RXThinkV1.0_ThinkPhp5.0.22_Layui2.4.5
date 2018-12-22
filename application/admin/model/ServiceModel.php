<?php
namespace app\admin\model;
use think\Model;
class ServiceModel extends Model {
    //模型
    protected $model;
    
    /**
     * 初始化模型
     * 
     * @author zongjl
     * @date 2018-12-10
     * (non-PHPdoc)
     * @see \think\Model::initialize()
     */
    public function initialize()
    {
        parent::initialize();
        //TODO...
    }
    
    /**
     * 获取数据列表
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    public function getList()
    {
        // 获取参数
        $argList = func_get_args();
        // 查询条件
        $map = isset($argList[0]) ? $argList[0] : [];
        // 排序
        $sort = isset($argList[1]) ? $argList[1] : [];
        
        // 设置查询条件
        if(is_array($map)) {
            $map['mark'] = 1;
        }else{
            $map .= " AND mark=1 ";
        }
        $result = $this->model->where($map)->order($sort)->page(PAGE,PERPAGE)->column("id");
        $list = [];
        if(is_array($result)) {
            foreach ($result as $val) {
                $info = $this->model->getInfo($val);
                $list[] = $info;
            }
        }
        
        //获取数据总数
        $count = $this->model->where($map)->count();

        //返回结果
        $message = array(
            "msg"   => '操作成功',
            "code"  => 0 ,
            "data"  => $list,
            "count" => $count,
        );
        return $message;
    }
    
    /**
     * 添加或编辑
     * 
     * @author zongjl
     * @date 2018-12-10
     */
    public function edit()
    {
        // 获取参数
        $argList = func_get_args();
        // 查询条件
        $data = isset($argList[0]) ? $argList[0] : [];
        // 是否打印SQL
        $is_sql = isset($argList[1]) ? $argList[1] : false;
        if(!$data) {
            $data = request()->param();
        }
        $error = '';
        $rowId = $this->model->edit($data,$error,$is_sql);
        if($rowId) {
            return message();
        }
        return message($error,false);
    }
    
}