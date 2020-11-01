<?PHP
use coreAppNS\Controller;

class admin_productController extends Controller{
public $controller;
public $cat_model;



    function __construct($function="index"){
        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin/product');
        $this->$function();
       }
       function index(){  
            $items=array(
                'products'=>$this->cat_model->getproducts(),
                'color'=>$this->cat_model->getColor(),
                'brand'=>$this->cat_model->getBrand(),
                'categories'=>$this->cat_model->getCategory(),
                );
        $this->controller->view_object->create_view('admin/products/show_products',$items);
       }
       function add_pro(){
       $items=array(
        'color'=>$this->cat_model->getColor(),
        'brand'=>$this->cat_model->getBrand(),
        'categories'=>$this->cat_model->getCategory(),
        );
        $this->controller->view_object->create_view('admin/products/add_products',$items);   
       }
       function edite_product(){ 
        $items=array(
            'color'=>$this->cat_model->getColor(),
            'brand'=>$this->cat_model->getBrand(),
            'categories'=>$this->cat_model->getCategory(),
            'products'=>$this->cat_model->updateproduct(),
        );
        $this->controller->view_object->create_view('admin/products/edite_products',$items);
       }
       function add(){
         function img($img){
            $images = '';
            $uploadFolder = 'app/assets/images/';
         foreach ($img['tmp_name'] as $key => $image) {
             $imageName = $img['name'][$key];
           //  echo "<br>".$imageName."<br>";
             $imageTmpName = $img['tmp_name'][$key];
           // echo "<br>".$imageTmpName."<br>";
           //  $new_name = sha1(date("y-m-d-h-i-s")).rand();
           //  echo "<br>".$new_name."<br>";
             $images.= $imageName.',';//$uploadFolder.
            // echo "<br>".$images."<br>";
             $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
            // echo "<br>".$result."<br>";
             }
             return $images;
         }
           
        function main_image($img){
             
            $uploadFolder = 'app/assets/images/';
           // $new_name = sha1(date("y-m-d-h-i-s")).rand();
           // echo "<br>".$new_name."<br>";
            $main_imageName = $img['name'];
           // echo "<br>".$main_imageName."<br>";
            $main_imageTmpName = $img['tmp_name'];
            //echo "<br>".$main_imageTmpName."<br>";
            $images= $main_imageName;//$uploadFolder.
            //echo "<br>".$images."<br>";
            $result = move_uploaded_file($main_imageTmpName,$uploadFolder.$images);
            //echo "<br>".$result."<br>";
            return $images;
        }
        $img = img($_FILES['product_images']);
        $main_image = main_image($_FILES['product_main_image']); 
        // print_r($_POST);

         $data = array( 
             
            'product_name' => $_POST['product_name'], 
            'product_details' => $_POST['product_details'], 
            'category_id' => $_POST['category_id'], 
            'brand_id' => $_POST['brand_id'], 
            'product_quantity' => $_POST['product_quantity'], 
            'product_main_image' => $main_image,
            'product_images' => $img,
            'color_id' => $_POST['color_id'], 
            'product_short_desc' => $_POST['product_short_desc'], 
            'product_long_desc' => $_POST['product_long_desc'], 
            'product_price' => $_POST['product_price'], 
            'is_active' => $_POST['is_active'], 
            'creation_date' => $_POST['creation_date']
         );

         $this->cat_model->addData($data);
         $items=array(
            'products'=>$this->cat_model->getproducts(),
            'color'=>$this->cat_model->getColor(),
            'brand'=>$this->cat_model->getBrand(),
            'categories'=>$this->cat_model->getCategory(),
            );
    $this->controller->view_object->create_view('admin/products/show_products',$items);
    
       }
       function edite_cat(){ 
        $items=array(
            'products'=>$this->cat_model->updateproduct(),
        );
       // print_r($items);
        $this->controller->view_object->create_view('admin/products/edite_product',$items);
       }
       function update(){
        function img($img){
            $images = '';
            $uploadFolder = 'app/assets/images/';
         foreach ($img['tmp_name'] as $key => $image) {
             $imageName = $img['name'][$key];
           //  echo "<br>".$imageName."<br>";
             $imageTmpName = $img['tmp_name'][$key];
           //  echo "<br>".$imageTmpName."<br>";
           //  $new_name = sha1(date("y-m-d-h-i-s")).rand();
           //  echo "<br>".$new_name."<br>";
             $images.= $imageName.',';//$uploadFolder.
           //  echo "<br>".$images."<br>";
             $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
           //  echo "<br>".$result."<br>";
             }
             return $images;
         }
           
        function main_image($img){
        $uploadFolder = 'app/assets/images/';
        // $new_name = sha1(date("y-m-d-h-i-s")).rand();
        // echo "<br>".$new_name."<br>";
         $main_imageName = $img['name'];
       //  echo "<br>".$main_imageName."<br>";
         $main_imageTmpName = $img['tmp_name'];
       //  echo "<br>".$main_imageTmpName."<br>";
         $images= $main_imageName;//$uploadFolder.
       //  echo "<br>".$images."<br>";
         $result = move_uploaded_file($main_imageTmpName,$uploadFolder.$images);
       //  echo "<br>".$result."<br>";
         return $images;
     }
     $img = img($_FILES['product_images']);
     $main_image = main_image($_FILES['product_main_image']); 
     // print_r($_POST); 'product_id' => $_POST['product_id'], 
     if($_FILES['product_images']['size'] = 0 || $_FILES['product_main_image']['size'] = 0){
        $data = array( 
            'product_name' => $_POST['product_name'], 
            'product_details' => $_POST['product_details'], 
            'category_id' => $_POST['category_id'], 
            'brand_id' => $_POST['brand_id'], 
            'product_quantity' => $_POST['product_quantity'], 
            'color_id' => $_POST['color_id'], 
            'product_short_desc' => $_POST['product_short_desc'], 
            'product_long_desc' => $_POST['product_long_desc'], 
            'product_price' => $_POST['product_price'], 
            'is_active' => $_POST['is_active'], 
         );
   
            $this->cat_model->updatewithoutimage($data);    
     }
     else
     {
      
      $data = array( 
         'product_name' => $_POST['product_name'], 
         'product_details' => $_POST['product_details'], 
         'category_id' => $_POST['category_id'], 
         'brand_id' => $_POST['brand_id'], 
         'product_quantity' => $_POST['product_quantity'], 
         'product_main_image' => $main_image,
         'product_images' => $img,
         'color_id' => $_POST['color_id'], 
         'product_short_desc' => $_POST['product_short_desc'], 
         'product_long_desc' => $_POST['product_long_desc'], 
         'product_price' => $_POST['product_price'], 
         'is_active' => $_POST['is_active'], 
      );

         $this->cat_model->update($data);
        }
         $items=array(
            'products'=>$this->cat_model->getproducts(),
            'color'=>$this->cat_model->getColor(),
            'brand'=>$this->cat_model->getBrand(),
            'categories'=>$this->cat_model->getCategory(),
            );
    $this->controller->view_object->create_view('admin/products/show_products',$items);
   }

      function delete(){
        //  $_POST['create_date']='now()';
        print_r($_POST);
       
         $this->cat_model->delete($_POST);
         $this->controller->view_object->create_view('admin/feedback');
      }
      function delete_product(){ 
        $items=array(
            'color'=>$this->cat_model->getColor(),
            'brand'=>$this->cat_model->getBrand(),
            'categories'=>$this->cat_model->getCategory(),
            'products'=>$this->cat_model->updateproduct(),
        );
        $this->controller->view_object->create_view('admin/products/delete_products',$items);
       }
    }


?>