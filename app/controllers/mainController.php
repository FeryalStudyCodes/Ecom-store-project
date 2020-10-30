<?php
use coreAppNS\Controller;
class mainController extends Controller{
    public $controller;


    function __construct($function="index"){
        $this->controller = new Controller();
        $this->$function();
    }
       function main(){   
        $this->controller->view_object->create_view('main');
       }

       function login(){   
        $this->controller->view_object->create_view('login');
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