<?php
use coreAppNS\Controller;

class admin_loginController extends Controller{
    public $controller;
    public $login_model;
    public $link;

    function __construct($function="index",$url)
    {
        $this->link = $url;
        $this->controller = new Controller();
        $this->login_model=$this->controller->model_object->create_model('admin/login');
        $this->$function();
       
    }
       function index(){
        $this->controller->view_object->create_view('admin/login');
       }
       function checklogin(){
        //  print_r($_POST);
          $this->login_model->check($_POST);
          //$this->controller->view_object->create_view('admin/admin_home');
       }
       function admin_home(){
        $this->controller->view_object->create_view('admin/admin_home');   
    }
}
?>