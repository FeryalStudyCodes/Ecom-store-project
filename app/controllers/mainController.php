<?php
use coreAppNS\Controller;
class mainController extends Controller{
    public $controller;
    public $main_model;


    function __construct($function="index"){
        $this->controller = new Controller();
        $this->cat_model=$this->controller->model_object->create_model('main');
        $this->$function();
    }
       function main(){   
        $items=array(
            'products'=>$this->cat_model->getproducts(),
            'color'=>$this->cat_model->getColor(),
            'brand'=>$this->cat_model->getBrand(),
            'categories'=>$this->cat_model->getCategory(),
            );
       $this->controller->view_object->create_view('main',$items);
       }

       function login(){   
        $this->controller->view_object->create_view('login');
       }
       function checklogin(){
           print_r($_POST);
        $this->main_model->check($data);
       }
       function singnup(){   
        $this->controller->view_object->create_view('singnup');
       }
 
       function categories(){   
        $this->controller->view_object->create_view('categories');
    }

    function product(){   
        $this->controller->view_object->create_view('product');
    }

    function wishlist(){   
        $this->controller->view_object->create_view('wishlist');
    }
}

?>