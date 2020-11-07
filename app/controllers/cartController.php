<?php
use coreAppNS\Controller;
class cartController extends Controller{
    public $controller;
    public $cart_model;

    function __construct($function="index"){
        $this->controller = new Controller();
        $this->cart_model=$this->controller->model_object->create_model('cart');
        $this->$function();
    }

     function index(){ 
        $items=array(
            'cart'=>$this->cart_model->getData(),
        );  
        $this->controller->view_object->create_view('shopping_cart',$items);
       }

    //     function insert(){
    //      $this->cat_model->addData($_POST);
    //      $this->controller->view_object->create_view('admin/feedback');
    //    }
}