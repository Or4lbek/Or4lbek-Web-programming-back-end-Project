<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;

class UploadController extends Controller
{
    //
    public function index(Request $req){
    
        
        Client::create([
            'name' => $req->username,
            'number' => $req->num,
            'email' => $req->mail,
        ]);
        $name = new \stdClass();
        $name->name = $req->username;
        $number = new \stdClass();
        $number->number = $req->num;
        $email = new \stdClass();
        $email->email = $req->mail;
        Mail::to("almatycredo@gmail.com")->send(new WelcomeMail($email, $name, $number));
        //$req->email
        
        return back();

    }
}
