<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class OrderPlaceController extends Controller
{
    public function orderPlace(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $amount = $request->amount;
        $data =  [];
        $user['to'] = $request->email;

        Mail::send('welcome', $data, function($message) use ($user) {
            $message->to($user['to'])
            ->subject('Payment Success in WebSolutionUs');
            $message->setBody('Hi, Your payment is successfully done.'); 
         });

        return "success"; 
    }
}
