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
                $_POST['message'] = validateDate($_POST['check_in'], $format = 'Y-m-d H:i:s');
                if ($_POST['message'] == "") {
                    $errors .= 'Please enter check in date.<br/>';
                }
            } else {
                $errors .= 'Please enter check in date.<br/>';
            }

            if ($_POST['check_out'] != "") {
                $_POST['message'] = validateDate($_POST['check_out'], $format = 'Y-m-d H:i:s');
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
                echo "Thank you for your email!<br/><br/>";
            } else {
                echo '<div style="color: red">' . $errors . '<br/></div>';
            }
        }
    }

}
