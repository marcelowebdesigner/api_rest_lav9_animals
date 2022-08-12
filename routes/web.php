<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
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

//- Devoluciones: un solo objeto de animal de zoológico aleatorio en formato JSON
Route::get('/animals', function (GuzzleHttp\Client $client){
    $response = $client->request('GET', "/animals/rand");
    $data = json_decode($response->getBody());
    dd($data);
});