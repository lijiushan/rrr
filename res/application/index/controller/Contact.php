<?php


namespace app\index\controller;


use think\Db;

class Contact extends Head
{
  public function index(){
      $arr = new Head();
      $head = $arr->index();
      $this->assign('head',$head);
      $contact = Db::name('contact')->where('id','1')->find(1);
      $this->assign('contact',$contact);
      return $this->fetch("contact");
  }
}