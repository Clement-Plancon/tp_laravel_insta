<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Mail\TestEmail;
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

/* Route::get('/',[PageController::class, 'index']);*/
Route::get('/catalog',[PageController::class, 'catalog']);
Route::get('/register',[PageController::class, 'register']);
Route::get('/login',[PageController::class, 'login']);
Route::get('/profil',[PageController::class, 'profil']);
Route::get('/basket',[PageController::class, 'basket']);
Route::get('/decoUser_action',[PageController::class, 'decoUser_action']);
Route::post('/conUser_action',[PageController::class, 'conUser_action']);
Route::post('/addBasket_action',[PageController::class, 'addBasket_action']);
Route::get('generatepdf',[PageController::class, 'generatepdf'])->name('panier.pdf');
Route::get('payment-form', [PageController::class, 'form'])->name('form.payement');
Route::post('make/payment', [PageController::class, 'payment'])->name('make.payement');

Route::get('/', function(){
    return view('pages.index');
});


Route::post('/registerUser_action', function(){
    $email = $_POST['user_email'];
    $mailData = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to($email)->send(new TestEmail($mailData));
    return view('models.registerUser_action');
});