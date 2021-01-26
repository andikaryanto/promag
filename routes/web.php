<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('term', 'HomeController@term');
Route::get('privacy', 'HomeController@privacy');

Route::get('maag-meter', 'HomeController@maag_meter');
Route::post('maag-meter/step-by-step', 'HomeController@maag_meter_stepbystep');
Route::post('maag-meter', 'HomeController@save_maag_meter');
Route::get('maag-meter/diet', 'HomeController@maag_meter_diet');
Route::post('maag-meter/diet', 'HomeController@save_maag_meter_diet');
Route::get('maag-meter/lifestyle', 'HomeController@maag_meter_lifestyle');
Route::post('maag-meter/lifestyle', 'HomeController@save_maag_meter_lifestyle');
Route::get('maag-meter/symptom', 'HomeController@maag_meter_symptom');
Route::post('maag-meter/symptom', 'HomeController@save_maag_meter_symptom');
Route::get('maag-meter/symptomtime', 'HomeController@maag_meter_symptom_time');
Route::post('maag-meter/symptomtime', 'HomeController@save_maag_meter_symptom_time');
Route::get('maag-meter/symptomeffect', 'HomeController@maag_meter_symptom_effect');
Route::post('maag-meter/symptomeffect', 'HomeController@save_maag_meter_symptom_effect');
Route::post('maag-meter/result', 'HomeController@maag_meter_result');

Route::get('maag-meter-kalbe', 'KalbeController@maag_meter');
Route::post('maag-meter-kalbe/step-by-step', 'KalbeController@maag_meter_stepbystep');
Route::post('maag-meter-kalbe', 'KalbeController@save_maag_meter');
Route::get('maag-meter-kalbe/diet', 'KalbeController@maag_meter_diet');
Route::post('maag-meter-kalbe/diet', 'KalbeController@save_maag_meter_diet');
Route::get('maag-meter-kalbe/lifestyle', 'KalbeController@maag_meter_lifestyle');
Route::post('maag-meter-kalbe/lifestyle', 'KalbeController@save_maag_meter_lifestyle');
Route::get('maag-meter-kalbe/symptom', 'KalbeController@maag_meter_symptom');
Route::post('maag-meter-kalbe/symptom', 'KalbeController@save_maag_meter_symptom');
Route::get('maag-meter-kalbe/symptomtime', 'KalbeController@maag_meter_symptom_time');
Route::post('maag-meter-kalbe/symptomtime', 'KalbeController@save_maag_meter_symptom_time');
Route::get('maag-meter-kalbe/symptomeffect', 'KalbeController@maag_meter_symptom_effect');
Route::post('maag-meter-kalbe/symptomeffect', 'KalbeController@save_maag_meter_symptom_effect');
Route::post('maag-meter-kalbe/result', 'KalbeController@maag_meter_result');

Route::get('product/list', 'HomeController@product_list');
Route::get('product/detail/{slug}', 'HomeController@product_detail');
Route::post('save', 'HomeController@save_checker');
Route::get('article/list', 'HomeController@article_list');
Route::get('article/detail/{slug}', 'HomeController@article_detail');
Route::post('subscribe','\App\Http\Controllers\HomeController@postSubscribe');
Route::get('search', 'HomeController@search');
Route::get('video/list', 'HomeController@video_list');
Route::get('seputar-maag', 'HomeController@seputar_maag');
Route::get('fact/list', 'HomeController@seputar_maag_fact_list');

Route::get('seputar-maag/list', 'HomeController@seputar_maag_symptom_list');
Route::get('seputar-maag/detail/{slug}', 'HomeController@seputar_maag_symptom_detail');
Route::get('seputar-maag/fact/list', 'HomeController@seputar_maag_fact_list');
Route::get('seputar-maag/fact/detail/{slug}', 'HomeController@seputar_maag_fact_detail');
Route::get('seputar-maag/faq', 'HomeController@seputar_maag_faq_list');

Route::get('share', 'HomeController@share');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



// Route::prefix('frontend')->group(function () {
//     Route::get('', ['as' => 'templates.index', 'uses' => '\App\Http\Controllers\TemplatesController@index']);
//     Route::get('home', ['as' => 'templates.index', 'uses' => '\App\Http\Controllers\TemplatesController@index']);
//     Route::get('about', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@about']);
//     Route::get('maag-meter/user', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@user_maag_meter']);
//     Route::get('maag-meter/pola-makan', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_meter_pola_makan']);
//     Route::get('maag-meter/pola-hidup', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_meter_pola_hidup']);
//     Route::get('maag-meter/gejala', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_meter_gejala']);
//     Route::get('maag-meter/waktu-gejala', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_meter_waktu_gejala']);
//     Route::get('maag-meter/dampak-gejala', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_meter_dampak_gejala']);
//     Route::get('maag-meter/result', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@result_maag_meter']);
//     Route::get('product/list', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@product_list']);
//     Route::get('product/gazero', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@product_gazero']);
//     Route::get('product/detail-tablet', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@product_detail_tablet']);
//     Route::get('product/detail-doubleaction', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@product_detail_doubleaction']);
//     Route::get('product/detail-cair', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@product_detail_cair']);
//     Route::get('artikel/list', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@artikel_list']);
//     Route::get('artikel/detail', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@artikel_detail']);
//     Route::get('video/list', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@video_list']);
//     Route::get('contact', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@contact']);
//     Route::get('search/result', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@search_result']);
//     Route::get('maag-meter/result/kronis-gerd', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@kronis_gerd']);

//     Route::get('maag-meter/result/gerd', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@gerd']);
//     Route::get('maag-meter/result/tidak-maag', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@tidak_maag']);
//     Route::get('maag-meter/result/akut-gerd', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@akut_gerd']);
//     Route::get('maag-meter/result/maag-kronik', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@maag_kronik']);

//     Route::get('seputar-maag/submenu', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@seputar_maag']);
//     Route::get('seputar-maag/list', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@seputar_maag_list']);
//     Route::get('seputar-maag/faq', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@faq']);
//     Route::get('landingpage', ['as' => 'templates.about', 'uses' => '\App\Http\Controllers\TemplatesController@landingpage']);

// });