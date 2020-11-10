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
            'order_product'=>$this->main_model->orderby(),
            'color'=>$this->main_model->getColor(),
            'brand'=>$this->main_model->getBrand(),
            'categories'=>$this->main_model->getCategory(),
            );
            // print_r($items);
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

       function getcategories(){
        $this->cat_model=$this->controller->model_object->create_model('main');
        $items=array(
            'categories'=>$cat_model->getCategory(),
        
        );

        $this->controller->view_object->create_view('product',$items);
     //   $this->controller->view_object->create_view('categories',$items);

       }



    function product(){   
        $this->controller->view_object->create_view('product');

    }
   
    function product_details(){   
        $items=array(
            'products'=>$this->main_model->getproduct_details(),
            'categories'=>$this->main_model->getCategory(),
            );
          //  print_r($items);
       $this->controller->view_object->create_view('product',$items);
    }

    // function wishlist(){   
    //     $this->controller->view_object->create_view('wishlist');
    // }


    function shopingCart(){   
        $this->main_model->addtocart($_POST);
    }
    function  displayShopingCartItems(){  
        $items=array(
            'cartItems'=>$this->main_model->showcartitem($_POST),
            );
       // print_r($items);
            $this->controller->view_object->create_view('cart',$items);
    }
    function  updateShopingCartItems(){  
        $this->main_model->updatecartitem($_POST);
    }
    function  removeShopingCartItems(){  
        $this->main_model->removecartitem($_POST);
    }




    function wishlist(){   
        $this->main_model->addtowishlist($_POST);
    }
    function  displayWishListItems(){  
        $items=array(
            'wishlisttItems'=>$this->main_model->showWishlistitem($_POST),
            );
            $this->controller->view_object->create_view('wishlist',$items);
    }
    function  removeWishListItems(){  
        $this->main_model->removeWishlistitem($_POST);
    }
    function shopingCartinwishlis(){
        $this->main_model->addtocartfromwishlist($_POST);
    }
    
        
    }

  

 
    

  


?>