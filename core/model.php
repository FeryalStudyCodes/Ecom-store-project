<?PHP
namespace coreAppNS;

class Model{
    function  create_model($model_name){
        $clean_url=rtrim($model_name,'/');
        $clean_url=explode('/',$clean_url);
       
        $controller_dirctory="app/models/";
        $requestedModel;
        foreach($clean_url as $part){
            if(is_dir($controller_dirctory.$part)){
                $controller_dirctory.=$part."/";
            }
            else {
                $requestedModel=$part;
            break;
            }
        }       
        require_once($controller_dirctory.$requestedModel.".php");
       // echo $requestedModel;
        return new $requestedModel();
    }
}
?>
