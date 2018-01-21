<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherController extends Controller
{

    public function sendNotification()
    {
	
        $options = array(
            'cluster' => 'ap2',
            'encrypted' => true
        );
        $pusher = new Pusher(
            'b62110db35c8b08d5dbe',
            'c12f77201d89a3c84b23',
            '460683',
            $options
        );
	    
	$message= "Hello User";
		
        $pusher->trigger('notify', 'notify-event', $message);
        
    }
}
