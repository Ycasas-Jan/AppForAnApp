<?php
require_once __DIR__ . '/vendor/autoload.php';
defined('BASEPATH') OR exit('No direct script access allowed');
define('APPLICATION_NAME', 'Google Calendar API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/calendar-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
define('SCOPES', implode(' ', array(
        Google_Service_Calendar::CALENDAR)
));

class Demo extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('demo');
    }

    public function demoSubmit()
    {
        $this->load->database();
        $name = $_POST["name"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $timeStart = $_POST["timeStart"];
        $timeEnd = $_POST["timeEnd"];

        $timeStartMin = $this->parseMinutes($timeStart);
        $timeEndMin = $this->parseMinutes($timeEnd);
        if ($timeEndMin < $timeStartMin) {
            $data = array();
            $data['message'] = "ERROR: Invalid Time.";
            $this->load->view('blankPage', $data);
        }

        $sql = "SELECT * FROM Events";
        $results = $this->db->query($sql);
        $add = true;
        foreach ($results->result_array() as $row) {
            $sTime = $row['timeStart'];
            $eTime = $row['timeEnd'];
            $day = $row['date'];
            if ($timeEndMin > $sTime && $timeStartMin < $eTime && $day == $date) {
                $data = array();
                $data['message'] = "ERROR: Appointment Conflict";
                $this->load->view('blankPage', $data);
                $add = false;
                break;
            }
        }
        if ($add) {
            $sql = "INSERT INTO Events (name,email,date,timeStart,timeEnd)
                      VALUES (\"$name\", \"$email\",\"$date\",$timeStartMin,$timeEndMin)";
            $this->db->query($sql);
            $this->masterFunction($name, $email, $date, $timeStart, $timeEnd);

            $this->load->library('email');

            $this->email->from($email, 'Jan Ycasas');
            $this->email->to($email);

            $this->email->subject('Appointment Confirm');
            $this->email->message("Your Appointment has been confirmed. It is on $date from $timeStart to $timeEnd");

            $this->email->send();

            echo $this->email->print_debugger();
        }
    }

    public function parseMinutes($time)
    {
        $minutes = 0;
        $arr = explode(":", $time);
        $minutes += 60 * $arr[0] + $arr[1];

        return $minutes;
    }

    function expandHomeDirectory($path)
    {
        $homeDirectory = getenv('HOME');
        if (empty($homeDirectory)) {
            $homeDirectory = getenv("HOMEDRIVE") . getenv("HOMEPATH");
        }
        return str_replace('~', realpath($homeDirectory), $path);
    }


    function masterFunction($clientName, $email, $date, $timeStart, $timeEnd)
    {
        $client = new Google_Client();
        $client->setApplicationName(APPLICATION_NAME);
        $client->setScopes(SCOPES);
        $client->setAuthConfigFile(CLIENT_SECRET_PATH);
        $client->setAccessType('offline');

        // Load previously authorized credentials from a file.
        $credentialsPath = $this->expandHomeDirectory(CREDENTIALS_PATH);
        if (file_exists($credentialsPath)) {
            $accessToken = file_get_contents($credentialsPath);
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->authenticate($authCode);

            // Store the credentials to disk.
            if (!file_exists(dirname($credentialsPath))) {
                mkdir(dirname($credentialsPath), 0700, true);
            }
            file_put_contents($credentialsPath, $accessToken);
            printf("Credentials saved to %s\n", $credentialsPath);
        }
        $client->setAccessToken($accessToken);

        // Refresh the token if it's expired.
        if ($client->isAccessTokenExpired()) {
            $client->refreshToken($client->getRefreshToken());
            file_put_contents($credentialsPath, $client->getAccessToken());
        }

        $service = new Google_Service_Calendar($client);

        $calendarId = 'flvg74jiidvsfvptdp3gs3qs88@group.calendar.google.com';
        $event = new Google_Service_Calendar_Event(array(
            'summary' => $clientName,
            'start' => array(
                'dateTime' => $date . 'T' . $timeStart . ':00-08:00',
                'timeZone' => 'America/Vancouver',
            ),
            'end' => array(
                'dateTime' => $date . 'T' . $timeEnd . ':00-08:00',
                'timeZone' => 'America/Vancouver',
            ),
            'reminders' => array(
                'useDefault' => FALSE,
                'overrides' => array(
                    array('method' => 'email', 'minutes' => 24 * 60),
                    array('method' => 'popup', 'minutes' => 10),
                ),
            ),
        ));
        $eventGenerated = $service->events->insert($calendarId, $event);
        $data = array();
        $data['message'] = "SUCCESS: Appointment Created";
        $this->load->view('blankPage', $data);
    }
}
