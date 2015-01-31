<?php
/**
* 管理界面
*/

namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    //前置验证操作
    public function _before_index(){
             if (!isset($_SESSION['a_name'])||$_SESSION['a_name']='' ) {
                   $this->redirect('Login/index');
                 }    
            }

    public function index(){
     
        $this->display();

    }



}