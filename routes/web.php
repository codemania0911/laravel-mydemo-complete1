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
    return view('dietplan.index');
});

Route::post('/savedietplan', 'DietPlanController@saveDietPlan');

Route::get('/showdiet/{key?}/week/{week_num}', 'DietPlanController@showDietPlan');
Route::get('/dietdetail/{key}/recipe/{id}', 'DietPlanController@dietDetail');
Route::post('/sendemail/send', 'SendEmailController@send');