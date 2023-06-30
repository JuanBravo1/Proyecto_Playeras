<?php

define('controladores','app/Controller/');
    $control=isset($_GET['C'])?$_GET['C']:'';
    //armamos la ruta que se va a seguir
    $ruta=controladores.$control.".php";
    //verificamos que exusta el archivo de ruta o que no se haya ido en blanco
    if(!empty($control) && file_exists($ruta)){
        include_once($ruta);
        $objeto=new $control();
        //verificamos que se haya pasado el metdo por la url 
        $metodo=isset($_GET['M'])?$_GET['M']:'';
        //verificamos que lo que se paso exista 
        if(!empty($_GET['M']) && method_exists($objeto,$metodo)){
            //ejecutamos el metdo del objeto
            $objeto->$metodo();
        }
    }else{
        //llamamos al controlador por default
        require_once("app/Controller/DefaultController.php");
        $index=new DefaultController(); 
        $index->index();
    }

?>