<?PHP
namespace coreAppNS;
class Route{

    function __construct($url){
        $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
        $controller_dirctory="app/controllers/";
        $rquestedController;
        foreach($clean_url as $part){
            if(is_dir($controller_dirctory.$part)){
                $controller_dirctory.=$part."/";
            }
            else {
                $rquestedController=$part."Controller";
            break;
            }
        }
        include($controller_dirctory.$rquestedController.".php");
        $function_name=$clean_url[sizeof($clean_url)-1];
       // echo $function_name;
        new $rquestedController($function_name,$url);
    }
}
?>