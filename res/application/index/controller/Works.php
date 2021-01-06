<?php


namespace app\index\controller;


class Works extends Head
{
    public function index(){
        $arr = new Head();
        $head = $arr->index();
        $this->assign('head',$head);
        return $this->fetch('');
    }

}