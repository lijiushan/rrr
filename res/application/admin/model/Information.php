<?php

namespace app\admin\model;

use think\Model;


class Information extends Model
{

    

    

    // 表名
    protected $name = 'information';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'gender_text'
    ];
    

    
    public function getGenderList()
    {
        return ['male' => __('Gender male'), 'female' => __('Gender female')];
    }


    public function getGenderTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['gender']) ? $data['gender'] : '');
        $list = $this->getGenderList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
