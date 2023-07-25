<?php
//definimos la clase controlador por default que se invoca al inicio de la app
    class ShopController{
        //el controlador tiene un atributo llmado vista 
        private $vista;
        
        // definimos el metodo index de nuestro controlador 
        public function index(){
            //inicializamos a vista con lo que vamos a mostrar en la plantilla 
            $vista="App/Views/Public/IndexMenuShopView.php";
            //incluimos a la plantilla 
            include_once("App/Views/Public/PlantillaShopView.php");
        }
        public function Menindex(){
            //inicializamos a vista con lo que vamos a mostrar en la plantilla 
            $vista="App/Views/Public/MenIndexView.php";
            //incluimos a la plantilla 
            include_once("App/Views/Public/PlantillaShopView.php");
        }
    }
?>