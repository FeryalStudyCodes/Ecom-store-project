<?php
namespace coreAppNS;
class Controller{

    public $view_object;
    public $model_object;

    function __construct(){

       $this->view_object = new View();
        $this->model_object = new Model();
    }

}

?>