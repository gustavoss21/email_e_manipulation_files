<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\MessagemMail;
use Symfony\Component\Mime\Email;
use App\Http\Controllers\TarefaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['verify' => true]); #sem o verify, o usuario não sera obrigado a validar email

Route::get('/', function () {
    return view('bem-vindo');
});

Route::get('/message', function(){
        return new MessagemMail();
    }
);

Route::get('/envelope', function(){
    // return new MessagemMail();
    Mail::to('santos.gs708@gmail.com')->send(new MessagemMail());
    return 'mensagem enviada';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/tarefa', TarefaController::class);

require __DIR__.'/auth.php';
