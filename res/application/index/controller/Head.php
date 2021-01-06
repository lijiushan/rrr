<?php


namespace app\index\controller;


use app\common\controller\Frontend;
use think\Db;
use think\Request;

class Head extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index(){
        $data = Db::name('admin')->where('id','1')->find();
        return $data;
    }


}