<?php
require_once __DIR__ . '/vendor/autoload.php';
defined('BASEPATH') OR exit('No direct script access allowed');
define('APPLICATION_NAME', 'Google Calendar API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/calendar-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
define('SCOPES', implode(' ', array(
        Google_Service_Calendar::CALENDAR)
));

class Contact extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('contact');
    }

    public function contactSubmit()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $this->load->library('email');

        $this->email->from('ycasas.jan@gmail.com', 'Jan Ycasas');
        $this->email->to('afaacontactus@gmail.com');

        $this->email->subject('Contact Us Request');
        $this->email->message("Name: $name\n Email: $email\n Message: $message");

        $this->email->send();

    }
}
