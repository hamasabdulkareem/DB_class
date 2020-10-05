<?PHP

class View{
    function create_view($view_name){
        include("app/views/".$view_name.".php");
    }

}


?>