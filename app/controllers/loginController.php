<?php
use coreAppNS\Controller;
class loginController extends Controller{
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
    function index()
    {   
        $this->controller->view_object->create_view('login');
    }
       function add(){
         
          $this->login_model->check($_POST);
          $this->controller->view_object->create_view('feedback');
       }
}
?>