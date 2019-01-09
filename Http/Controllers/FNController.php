<?php

namespace App\Http\Controllers;
require_once base_path().'/vendor/africa'/'s_talking/AfricasTalkingGateway.php';
use Illuminate\Http\Request;
//google calendar
use Spatie\GoogleCalendar\Event;

class FNController extends Controller
{
  
    <?php
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');
// Specify your authentication credentials
$username   = "FNK";
$apikey     = "02c0060b25858056b677e0e6b9192de187fc27f9127ca8d229c8ea1bdcb524d4";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254713828995";
// And of course we want our recipients to know what we really do
$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";
// Create a new instance of our awesome gateway class

try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " StatusCode: " .$result->statusCode;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}


}
public function test_sms()
    {
      $all_events=Event::get();
      dd($all_events);

    }

