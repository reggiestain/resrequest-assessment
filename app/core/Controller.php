<?php

class Controller {
    /**
     * Load model
     * 
     * @param type $model
     * @return \model
     */
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
    
    /**
     * Load view
     * 
     * @param type $view
     * @param type $data
     */
    public function view($view,$data = []){
      require_once '../app/views/'.$view.'.php';  
    }
}
