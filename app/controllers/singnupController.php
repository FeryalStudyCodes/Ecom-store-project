<?php
use coreAppNS\Controller;
class singnupController extends Controller{
    public $controller;
    public $singn_model;
    public $link;

    /*function __construct(){
        $this->controller = new Controller();
        $this->controller->view_object->create_view('singnup');
       
    }*/





    function __construct($function="index",$url){
        $this->link = $url;
        $this->controller=new Controller();
        $this->singn_model=$this->controller->model_object->create_model('singnup');
        $this->$function();
        
       }


       function index(){   
        //$t=array('data','tv','bbb' );
            //'categories'=>$this->singn_model->getData(),
       
        //  $this->singn_model->getData();
         // $t='helo';
        $this->controller->view_object->create_view('singnup');
       }
       function add(){
          print_r($_POST);
         echo $_POST['name']."<br>";
         echo $_POST['password']."<br>";
         echo $_POST['email']."<br>";
           print_r($_POST);
           echo "<br>".$this->link;
          $this->singn_model->addData($_POST);
          $this->controller->view_object->create_view('feedback');
       }
}
?>