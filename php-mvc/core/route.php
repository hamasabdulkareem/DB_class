<?php

class Route{

    
    function __construct($url){
        
        $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
       
       // print_r ($clean_url);
      $requestedController=$clean_url[0]."Controller";
      include("app/controllers/".$requestedController.".php");

      new $requestedController;
    }
}

?>