<?php
require_once __DIR__ . '/vendor/autoload.php';
defined('BASEPATH') OR exit('No direct script access allowed');
define('APPLICATION_NAME', 'Google Calendar API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/calendar-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
define('SCOPES', implode(' ', array(
        Google_Service_Calendar::CALENDAR)
));

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
}
