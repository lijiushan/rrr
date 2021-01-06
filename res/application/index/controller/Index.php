<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;
use think\Session;

class Index extends Head
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';



    public function index()
    {
        $arr = new Head();
        $head = $arr->index();
        $information = Db::name('information')->where('id','1')->find();
        $this->assign('information',$information);
        $this->assign('head',$head);
        return $this->view->fetch();
    }

}
