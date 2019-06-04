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
    public function index() {
        $this->view('home/index', ['bookings' => Bookings::get()]);
    }

    /**
     * Create reservation
     * 
     * @return void
     */
    public function create() {
        $errors ='';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST['firstname'] != "") {
                $_POST['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
                if ($_POST['firstname'] == "") {
                    $errors .= 'Please enter a valid firstname.<br/><br/>';
                }
            } else {
                $errors .= 'Please enter your firstname.<br/>';
            }

            if ($_POST['surname'] != "") {
                $_POST['surname'] = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
                if ($_POST['surname'] == "") {
                    $errors .= 'Please enter a valid surname.<br/><br/>';
                }
            } else {
                $errors .= 'Please enter your surname.<br/>';
            }

            if ($_POST['email'] != "") {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
                }
            } else {
                $errors .= 'Please enter your email address.<br/>';
            }

            if ($_POST['rooms'] != "") {
                $_POST['rooms'] = filter_var($_POST['rooms'], FILTER_SANITIZE_STRING);
                if ($_POST['rooms'] == '') {
                    $errors .= 'Please enter valid number of rooms.<br/>';
                }
            } else {
                $errors .= 'Please enter number of rooms.<br/>';
            }

            if ($_POST['check_in'] != "") {
                $_POST['message'] = $this->validateDate($_POST['check_in'], $format = 'Y-m-d H:i:s');
                if ($_POST['message'] == "") {
                    $errors .= 'Please enter check in date.<br/>';
                }
            } else {
                $errors .= 'Please enter check in date.<br/>';
            }

            if ($_POST['check_out'] != "") {
                $_POST['message'] = $this->validateDate($_POST['check_out'], $format = 'Y-m-d H:i:s');
                if ($_POST['message'] == "") {
                    $errors .= 'Please enter check out date.<br/>';
                }
            } else {
                $errors .= 'Please enter check out date.<br/>';
            }

            if (!$errors) {
                Bookings::create([
                    'firstname' => $_POST['firstname'],
                    'surname' => $_POST['surname'],
                    'email' => $_POST['email'],
                    'check_in' => $_POST['check_in'],
                    'check_out' => $_POST['check_out'],
                    'rooms' => $_POST['rooms']
                ]);
                echo "<div class='alert alert-success alert-dismissible'>"
                   . "<a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"
                   . "Your reservation has been save successfully. <a href='home'> Click to view reservations</a></div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissible'>"
                   . "<a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".$errors."</div>";          
            }
        }
    }

}
