<?php
use coreAppNS\Controller;
class categoryController extends Controller{
    public $controller;
    public $catgory_model;

    function __construct($function="index"){
        $this->controller = new Controller();
        $this->cart_model=$this->controller->model_object->create_model('category');
        $this->$function();
    }

    function categories(){   
        $items=array(
            'products'=>$this->main_model->getproducts(),
            'color'=>$this->main_model->getColor(),
            'brand'=>$this->main_model->getBrand(),
            'categories'=>$this->main_model->getCategory(),
            );
       $this->controller->view_object->create_view('categories',$items);
       }

       function product(){   
        $this->controller->view_object->create_view('categories');

    }

    function getcategories(){
        $this->cat_model=$this->controller->model_object->create_model('categories');
        $items=array(
            'categories'=>$cat_model->getCategory(),
        
        );

        //$this->controller->view_object->create_view('product',$items);
        $this->controller->view_object->create_view('categories',$items);

       }
   

   
}