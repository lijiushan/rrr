<?php


namespace app\index\controller;


use think\Db;

class Experience extends Head
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        $arr = new Head();
        $head = $arr->index();
        $this->assign('head',$head);
        $experience = Db::name('experience')->order('id','asc')->paginate(12);
        $proexperience = Db::name('proexperience')->order('id','asc')->paginate(12);
        $this->assign('experience',$experience);
        $this->assign('proexperience',$proexperience);
        return $this->view->fetch();
    }


}