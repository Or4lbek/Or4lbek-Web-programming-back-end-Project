<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/client/add', function (){
    DB::table('clients') -> insert([
        'name' => 'Oralbek',
        'email' => 'theoralbeksapar@gmail.com',
        'number' => '87007456960'
        ]);
});

Route::get('client', function (){
    $client = Client::find(1);
    return $client;
});

Route::post('/',[UploadController::class, 'index']); 

Route::post('/question',[QuestionController::class, 'index'])->name('student.add'); 

Route::get('/{lang}',function($lang){
    App::setlocale($lang);
    return view('index');
});
/*Route::get('/question/add', function (){
    DB::table('customers') -> insert([
        'name' => 'Oralbek',
        'email' => 'theoralbeksapar@gmail.com'
        ]);
    DB::table('questions') -> insert([
        'name' => 'Oralbek',
        'email' => 'theoralbeksapar@gmail.com'
        ]);

});*/
Route::get('/{lang}', [LocalizationController::class,'index']);


/*Route::get('/email',function(){
    //Mail::to('email@emil.com')->send(new WelcomeMail());

    return new WelcomeMail();
    //return view('welcome');
});*/