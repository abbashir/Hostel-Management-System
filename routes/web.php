<?php

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
    return view('welcome');
});


Route::get('/dashboard', 'adminController@dashboardPage');


/* 
======================================================
Border Manager
======================================================
 */

// add border 
Route::get('/border/add', 'borderController@addBorderfunc');

// store border data
Route::post('/storeBorder', 'borderController@storeBorderData');

// manage border data
Route::get('/border/manage', 'borderController@manageBorderData');


// update border data alise 
Route::get('/border/update/{id}', 'borderController@editBorderData');

//update perform
Route::post('/UpdateBorder', 'borderController@UpdateBorderData');

//delete border data
Route::get('/border/delete/{id}', 'borderController@DeleteBorderData');




/* 
======================================================
Payment Manager
======================================================
 */
//show border data for payment
Route::get('/payment/make', 'paymentController@paymentMake');

//payment confirm 
Route::get('/payment/confirm/{id}', 'paymentController@paymentConfirn');

//Successfull message and print
Route::post('/payment/successfull', 'paymentController@paymentsuccessfull');

//Successfull message and print
Route::get('/payment/print/{seat}', 'paymentController@paymentPrint');

Route::get('/print', 'paymentController@print');


/* 
======================================================
seat Manager
======================================================
 */
//add seat and manage
Route::get('/seat', 'seatController@seatFunc');

//store seat 
Route::post('/addSeat', 'seatController@storeSeat');

//edit seat 
Route::get('/seat/update/{id}', 'seatController@editSeat');

//update seat 
Route::post('/updateSeat', 'seatController@updateSeat');

//delete seat 
Route::get('/seat/delete/{id}', 'seatController@deleteSeat');