
<?PHP
use coreAppNS\Controller;

class admin_brandController extends Controller{
public $controller;
public $cat_model;



    function __construct($function="index"){
        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin/brand');
        $this->$function();
       }
       function index(){ 
        $items=array(
            'brand'=>$this->cat_model->getData(),
        );  
        $this->controller->view_object->create_view('admin/brand/show_brand',$items);
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
       function add(){
        $this->controller->view_object->create_view('admin/brand/add_brand');
      }
       function insert(){
         $this->cat_model->addData($_POST);
       //  $this->controller->view_object->create_view('admin/feedback');
       }
       function delet(){
         $this->cat_model->delet($_POST);  
       }
       function edite_brand(){
        $items=array(
          'brand'=>$this->cat_model->updateBrand(),
      );  
      $this->controller->view_object->create_view('admin/brand/edit_brand',$items);
       }
       function update(){
        $this->cat_model->update($_POST);
        $items=array(
          'brand'=>$this->cat_model->getData(),
      );
        $this->controller->view_object->create_view('admin/brand/show_brand',$items);
       }
}


?>