<?php

/**
 * The default home controller, called when no controller/method has been
 * passes to the application
 *  
 */
class Home extends Controller {

    /**
     * Default controller method
     * 
     * @return viod
     */
    public function index($name = '') {

        $this->view('home/index', ['name' => $name]);
    }

    public function create() {

        Bookings::create([
            'firstname' => $user,
            'surname' => $email,
            'email' => $email,
            'check_in' => $email,
            'check_out' => $email,
            'rooms' => $rooms
        ]);
    }

}
