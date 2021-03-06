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

Route::redirect('/', '/nl');
Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('ticket/create', 'TicketController@create')
    ->name('ticket_create');

Route::post('ticket/save', 'TicketController@save')
    ->name('ticket_save');

Route::get('ticket/index_customer', 'TicketController@index')
    ->name('ticket_index');

Route::get('ticket/{id}/show', 'TicketController@show')
    ->name('ticket_show');

Route::put('ticket/{id}/update', 'TicketController@update')
    ->name('ticket_update');

Route::get('/ticket/index_helpdesk', 'TicketController@index_helpdesk')
    ->name('ticket_index_helpdesk');

Route::post('ticket/{id}/comment/save', 'CommentController@save')
    ->name('comment_save');

Route::put('ticket/{id}/close', 'TicketController@close')
    ->name('ticket_close');

Route::put('ticket/{id}/claim', 'TicketController@claim')
    ->name('ticket_claim');

Route::put('ticket/{id}/free', 'TicketController@free')
    ->name('ticket_free');

Route::put('ticket/{id}/escalate', 'TicketController@escalate')
    ->name('ticket_escalate');

Route::put('ticket/{id}/deescalate', 'TicketController@deescalate')
    ->name('ticket_deescalate');

Route::put('/ticket/{id}/delegate', 'TicketController@delegate')->name('ticket_delegate');

