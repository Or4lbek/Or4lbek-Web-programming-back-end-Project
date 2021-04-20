<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Question;
use App\Http\DB;
use App\Mail\QuestionMail;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    //
    public function index(Request $req){
//find or create 
        /*Customer::updated([
            'name' => $req->name,
            'email' => $req->email,
        ]);*/
        $user = Customer::where('email', request('email'))->first();

        if ($user === null) {
            $user = new Customer(['email' => request('email')]);
        }

        $user->name = request('name');

        $user->save();

        $file = $req->file('file');
        

        //$customer = Customer::create($req->all());
        if($req->file == null) {
            Question::create([
                'customer_id' => $user->id,
                'question' => $req->question,
                'image' =>'https://i.stack.imgur.com/GNhxO.png'
                ]);
                
                $obj = new \stdClass();
                $obj->name = $user->name;
                $obj->email = $user->email;
                $obj->question = $req->question;
                $obj->image = 'https://i.stack.imgur.com/GNhxO.png';
        }else{
            $image_url = $file->store('images');
            Question::create([
                'customer_id' => $user->id,
                'question' => $req->question,
                
                'image' =>$image_url
            ]);
            
            $obj = new \stdClass();
            $obj->name = $user->name;
            $obj->email = $user->email;
            $obj->question = $req->question;
            $obj->img = $req->$image_url;
        }
        
        Mail::to("almatycredo@gmail.com")->send(new QuestionMail($obj));
        

        
        
        
        
        //Mail::to($req->email)->send(new WelcomeMail());
     
        //return back();
        //return redirect();
        return back();
    }
}
