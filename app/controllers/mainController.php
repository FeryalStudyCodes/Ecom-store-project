<?php
use coreAppNS\Controller;
class mainController extends Controller{
    public $controller;
    public $main_model;


    function __construct($function="main"){
        $this->controller = new Controller();
        $this->main_model=$this->controller->model_object->create_model('main');
        $this->$function();
    }
       function main(){   
        $items=array(
            'products'=>$this->main_model->getproducts(),
            'color'=>$this->main_model->getColor(),
            'brand'=>$this->main_model->getBrand(),
            'categories'=>$this->main_model->getCategory(),
            );
       $this->controller->view_object->create_view('main',$items);
       }

       function login(){   
        $this->controller->view_object->create_view('login');
       }
       function checklogin(){
        $this->main_model->check($_POST); 
       
       }
       function singnup(){   
        $this->controller->view_object->create_view('singnup');
       }
       function adduser(){
        $this->main_model->addusers($_POST);
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

       function shopping_cart(){   
        $this->controller->view_object->create_view('shopping_cart');
    }
}

?>