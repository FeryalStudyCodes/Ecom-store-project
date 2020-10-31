<?php
use coreAppNS\Controller;
class homeController extends Controller{
    public $controller;


    function __construct(){
        $this->controller = new Controller();
        $this->controller->view_object->create_view('home');
       
    }
}

?>