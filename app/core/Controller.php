<?php

class Controller {

    /**
     * Load model
     * 
     * @param type $model
     * @return \model
     */
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    /**
     * Load view
     * 
     * @param type $view
     * @param type $data
     */
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    /**
     * 
     * @param type $date
     * @param type $format
     * @return type
     */
    public function validateDate($date, $format = 'Y-m-d H:i:s') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }

}
