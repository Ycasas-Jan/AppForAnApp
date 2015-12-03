<?php
    //require __DIR__ . '/vendor/autoload.php';
    /*
    session_start();
    $jobname = "BINGO";
    $joblocation = "Your mums house";
    $jobdescription = "An interview with a dog.";
    $startofjob = "2013-12-20T17:00:00.000+00:00"; //datetimes must be in this format
    $endofjob = "2013-12-20T18:00:00.000+00:00"; // YYYY-MM-DDTHH:MM:SS.MMM+HH:MM
    //So that's year, month, day, the letter T, hours, minutes, seconds, miliseconds, + or -, timezoneoffset in hours and minutes


    $client = new Google_Client();
    $client->setApplicationName('doesntmatter-whateveryouwant');
    $client->setClientId('yourclientid');
    $client->setClientSecret('yourclientsecret');
    $client->setRedirectUri('yourredirecturl-setingoogleconsole');
    $client->setDeveloperKey('yourdeveloperkey');
    $cal = new Google_Service_Calendar($client);

    if (isset($_GET['code'])) {
      $client->authenticate($_GET['code']);
      $_SESSION['token'] = $client->getAccessToken();
      header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    }
    if (isset($_SESSION['token'])) {
      $client->setAccessToken($_SESSION['token']);
    }
    echo "$client\n";
    if ($client->getAccessToken()) {
      $event = new Google_Event();
    $event->setSummary($jobname);
    $event->setDescription($jobdescription);
    $event->setLocation($joblocation);
    $start = new Google_EventDateTime();
    $start->setDateTime($startofjob);
    $event->setStart($start);
    $end = new Google_EventDateTime();
    $end->setDateTime($endofjob);
    $event->setEnd($end);
    echo $event;
    $createdEvent = $cal->events->insert('ycasas.jan@gmail.com', $event);
    echo $createdEvent->id;


    $_SESSION['token'] = $client->getAccessToken();
    } else {
      $authUrl = $client->createAuthUrl();
      print "<a class='login' href='$authUrl'>Connect Me!</a>";
    }
    */
    require_once '../../src/Google_Client.php';
         require_once '../../src/contrib/Google_CalendarService.php';
         define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
         session_start();

          $client = new Google_Client();
             $client->setApplicationName("Google Calendar PHP Starter Application");

              $client->setClientId('948026296758-tldjs20qg0dmqpsh31ruei8qlamoqqse.apps.googleusercontent.com');
             $client->setClientSecret('ecIVhk0i2EXmejE5O8EM9wio');
            $client->setRedirectUri('simple.php');
         $client->setDeveloperKey('AIzaSyBZ3VRJ9Wmo5aLs6jpf7qkTVIIIU25KSJc');
          echo "HI";
          $cal = new Google_CalendarService($client);
      if (isset($_GET['logout'])) {
        echo"LOGOUT";
      unset($_SESSION['token']);
        }

     if (isset($_GET['code'])) {
      echo "CODE";
            $client->authenticate($_GET['code']);
           $_SESSION['token'] = $client->getAccessToken();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
      }

     if (isset($_SESSION['token'])) {
      echo "TOKEN";
        $client->setAccessToken($_SESSION['token']);
       }

      $authUrl = $client->createAuthUrl();

      if (!$client->getAccessToken()) {
        $event = new Google_Event();
$event->setSummary('Halloween');
$event->setLocation('The Neighbourhood');
$start = new Google_EventDateTime();
$start->setDateTime('2012-10-31T10:00:00.000-05:00');
$event->setStart($start);
$end = new Google_EventDateTime();
$end->setDateTime('2012-10-31T10:25:00.000-05:00');
$event->setEnd($end);
$createdEvent = $cal->events->insert('[calendar id]', $event); //Returns array not an object

echo $createdEvent->id;
      }
?>