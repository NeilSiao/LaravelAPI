<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LineMessageController extends Controller
{
    //
    public function callback(Request $request){
        // Storage::put('line.txt', $request->all());
        Log::info($request->all());
        $events = $request->get('events');

        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('VfWoqgFj+cJ9Gw7GubAgw1cw5E7MvBHShwagEkwsssCwp9TyzFbkSwZSYcl15Vm1eyYaesIy/pibwSbk0d3CNyr/ZS/126sPpqRD34ZzWnXcqPoi/mu4dIqquyYEfFpajiZHmT11FwSIQaP7zmwyLwdB04t89/1O/w1cDnyilFU=');
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '67688d7b64ba63a9227c82ff0c01eca5']);
        if(isset($events[0])){
            $event = $events[0];
            $replyToken = $event['replyToken'];
            $response = $bot->replyText($replyToken, 'I did it!!!');
        }
        return response('ok', 200);
    }
    public function ok(Request $request){
        return 'ok';
    }
}
