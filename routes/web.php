<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'webIndex']);
Route::get('/services', [WebsiteController::class, 'webServices']);
Route::get('/contact', [WebsiteController::class, 'webContact']);
Route::get('/booknow', [WebsiteController::class, 'webBooknow']);
Route::post('/book', [WebsiteController::class, 'bookCustomer']);
Route::get('/shop', [WebsiteController::class, 'webShop']);


Route::get('/admin', [AdminController::class, 'adminIndex']);
Route::get('/client', [AdminController::class, 'adminClient']);
Route::get('/delete/{id}', [AdminController::class, 'clientDelete']);
Route::get('/edit/{id}', [AdminController::class, 'clientEdit']);
Route::post('/update/{id}', [AdminController::class, 'clientUpdate']);
Route::get('/addclient', [AdminController::class, 'clientAddView']);
Route::post('/upload', [AdminController::class, 'addClient']);
Route::get('/staff', [AdminController::class, 'staffView']);
Route::get('/addstaff', [AdminController::class, 'staffAdd']);
Route::post('/insert', [AdminController::class, 'staffInsert']);
Route::get('/remove/{id}', [AdminController::class, 'staffRemove']);
Route::get('/editstaff/{id}', [AdminController::class, 'staffEditView']);
Route::post('/updatestaff/{id}', [AdminController::class, 'staffUpdate']);
Route::get('/inventory', [AdminController::class, 'inventoryView']);
Route::get('/addproduct', [AdminController::class, 'addProductView']);
Route::post('/insertproduct', [AdminController::class, 'addProduct']);




//    jetstream //

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->role == 1){
            return view('admin.index');
        }
        // elseif(Auth::user()->role == 2){
        //     return view('receptionist.index');
        // }
         else{
             return view('website.index');
         }
    })->name('dashboard');
});

//   jetstream end   //
