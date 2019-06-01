<?php

class Home extends Controller{
    protected $Reservation;
    
    public function __construct() {
        $this->Reservation = $this->model('Reservation');
    }

    public function index($name=''){
        $reserv = $this->Reservation;
        $reserv->name = $name;
                
        $this->view('home/index',['name'=>$reserv->name]);
    }
}
