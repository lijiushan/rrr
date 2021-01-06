<?php


namespace app\index\controller;



use think\Db;

class Major extends Head
{
    public function index(){
        $arr = new Head();
        $head = $arr->index();
        $this->assign('head',$head);

        $major = Db::name('skills')->order('id','asc')->paginate(12);
        $this->assign('major',$major);
        return $this->fetch();
    }
    public function demo(){
        return $this->fetch('demo');
    }

}