<?php

use System\View\View;

class DefaultController{
    public function run($action){
        $this->$action();
    }

    public function actionIndex(){
        $view = new View('default.php');
        $view->display();
    }
}