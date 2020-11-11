if($_COOKIE['language']==""){
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];//Detecting Default Browser language
    }
    else {
        $lang = $_COOKIE['language'];//Detecting if cookie was set
    }
    switch($lang){
 case "en":
  require("lang/en.php"); 
  break;
 
 case "ar":
  require("lang/ar.php");
  break;
 default:
  require("lang/en.php");
  break;
 	}