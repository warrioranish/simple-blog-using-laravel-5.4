<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(request $request){

        $this->validate(request(), [
            'name' => 'required',
            'email'=>'required',
            'message'=> 'required|min:10'
        ]);

        $name = request('name');
        $email = request('email');
        $msg = request('message');

        Mail::send(['text'=>$msg], ['name', $name], function($message){
            $message->to('warrior.anish5@gmail.com', 'to anish')->subject('Contact Us');
            $message->from('warrior.anish5@gmail.com', 'User');
            
        });
    }
}
