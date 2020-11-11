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
        $this->singn_model=$this->controller->model_object->create_model('login');
        $this->$function();
       
    }
       function index(){
        $this->controller->view_object->create_view('admin/login');
       }
       function chec(){
          print_r($_POST);
          $this->login_model->checkl();
          $this->controller->view_object->create_view('admin/admin_home');
       }
}
?>