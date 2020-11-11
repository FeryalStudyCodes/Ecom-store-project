<?PHP
use coreAppNS\Controller;

class admin_catController extends Controller{
public $controller;
public $cat_model;



    function __construct($function="index"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin/category');
        $this->$function();
        
       }
       function index(){   
        $this->controller->view_object->create_view('admin/admin_home');
       }
       function login(){
        $this->controller->view_object->create_view('admin/login');
       }
       function checklogin(){
        $this->cat_model->check($_POST);
      }
       function logout(){
        $this->controller->view_object->create_view('admin/logout');   
       }
       function show(){   
        $items=array(
            'categories'=>$this->cat_model->getData(),
        );
        $this->controller->view_object->create_view('admin/categories/show_categories',$items);
       }
       function add_cat(){   
        $items=array(
            'categories'=>$this->cat_model->getparentCatergory(),
        );
        $this->controller->view_object->create_view('admin/categories/add_categories',$items);
       }
       function edite_cat(){ 
        $items=array(
            'categories'=>$this->cat_model->updateCategory(),
        );
        $this->controller->view_object->create_view('admin/categories/edite_categories',$items);
       }
       function add(){
          $this->cat_model->addData($_POST);
         // $this->controller->view_object->create_view('admin/feedback');
       }
       function update(){
         $this->cat_model->update($_POST);
         $items=array(
            'categories'=>$this->cat_model->getData(),
        );
          $this->controller->view_object->create_view('admin/categories/show_categories',$items);
        
      }
      function delete(){
         $this->cat_model->delete($_POST);
         
      }
}


?>