<?php
/**
* 留言板
*/

namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller {

    public function index(){

        $mes = M('message')->order('m_id desc')->select();
        // var_dump($mes);die;
        $this->assign('mes',$mes);
        $this->display();

    }
    public function delmes()
    {

        $m_id=I('get.m_id');
        $count= M('message')->where("m_id=$m_id")->delete();
        if ($count>0) {
                        $this->success('删除成功');
                      }
                  else{
                          $this->error("删除失败！");
                      }
    }

}