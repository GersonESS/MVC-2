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
        
        
    }
?>
