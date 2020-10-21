<?PHP
namespace coreAppNS;
class View{
    function create_view($view_name,$data=""){
        include("app/views/".$view_name.".php");
    }

}


?>