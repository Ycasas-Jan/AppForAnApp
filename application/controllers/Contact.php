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

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'afaacontactus@gmail.com',
            'smtp_pass' => 'freedom01',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($email, 'Jan Ycasas');
        $this->email->to('afaacontactus@gmail.com');

        $this->email->subject('Contact Us Request');
        $this->email->message("Name: $name\r\n Email: $email\r\n Message: $message");

        $this->email->send();
        $data = array();
        $data['message'] = "Message has been sent";
        $this->load->view('blankPage', $data);

    }
}
