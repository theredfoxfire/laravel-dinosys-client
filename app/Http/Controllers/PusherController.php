<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;
use Illuminate\Support\Facades\DB;

class PusherController extends Controller
{

    public function submitNotif()
    {

        return view('notif.create');
    }


    public function pusher() {
      $options = array(
          'cluster' => env('PUSHER_APP_CLUSTER'),
          'encrypted' => true
      );
      $pusher = new Pusher(
          env('PUSHER_APP_KEY'),
          env('PUSHER_APP_SECRET'),
          env('PUSHER_APP_ID'),
          $options
      );

      return $pusher;
    }


    public function sendNotification(Request $request)
    {
      	$message= '{"message": "'.$request->input('message').'"}';
        $this->pusher()->trigger('notify', 'notify-event', $message);

        return view('notif.index', compact('products'));
    }

    
    public function getLastID()
    {
        $orders = DB::table('oc_order')
                ->selectRaw('max(order_id) as orderID')
                ->get();
        $lastID = $orders[0]->orderID;
      	$message= '{"message": "Last order ID is: '.$lastID.'"}';
        $this->pusher()->trigger('notify', 'notify-event', $message);

        return view('notif.index', compact('products'));
    }
}
