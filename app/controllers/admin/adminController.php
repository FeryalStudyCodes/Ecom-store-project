<?php
use coreAppNS\Controller;

class adminController extends Controller{
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
        $items=array(
            'products'=>$this->login_model->getproducts(),
            'brand'=>$this->login_model->getBrand(),
            'categories'=>$this->login_model->getCategory(),
            );
        $this->controller->view_object->create_view('admin/admin_home',$items);
       }
       function login(){
        $this->controller->view_object->create_view('admin/login');
       }
       function checklogin(){
          $this->login_model->check($_POST);
       }
       function logout(){
        $this->controller->view_object->create_view('admin/logout');   
       }
}
?>