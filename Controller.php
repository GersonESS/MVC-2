<?php
require "Model.php";
require "View.php";

    class Controller
    
    {
        public function index()
        {
            $model = new Model();
            $view = new View();

            $name = $model->get_Name();

            $view->render($name);
        }
        
        public function product()
        {
            $model = new Model();
            $view = new View();

            $product = $model->get_Product();

            $view->render($product);
        }        
    }
?>
