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