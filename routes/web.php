<?php

use App\Http\Controllers\System\CelebrationController;
use App\Http\Controllers\System\CellsController;
use App\Http\Controllers\System\DashboardController;
use App\Http\Controllers\System\EventsController;
use App\Http\Controllers\System\MinisteriesController;
use App\Http\Controllers\System\NewsletterController;
use App\Http\Controllers\System\UniversidadeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::controller(WebsiteController::class)->group(function () {
    Route::get ('/',                    'welcome'     )->name('welcome');
    Route::get ('/Nossa-Historia',      'history'     )->name('history');
    Route::get ('/celulas',             'cell'        )->name('cell');
    Route::get ('/ministerios',         'ministeries' )->name('ministeries');
    Route::get ('/ministerio/{id}',     'ministery'   )->name('ministery');
    Route::get ('/celebracao',          'messages'    )->name('messages');
    Route::get ('/eventos',             'events'      )->name('events');
    Route::get ('/noticias',            'news'        )->name('news');
    Route::get ('/contribuir',          'gift'        )->name('gift');
    Route::get ('/evento',              'event'       )->name('event');
    Route::get ('/noticia',             'activity'    )->name('activity');
    Route::get ('/todas-as-noticias',   'all_news'    )->name('all_news');
    Route::post('/newsletter/confirm',  'confirm'     )->name('confirm');
    Route::get ('/newsletter/resposta', 'answer'      )->name('answer');
    Route::get ('/ub/cursos',           'courses'     )->name('courses');
    Route::get ('/ub/curso',            'course'      )->name('course');
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->prefix('system')->name('system.')->group(function () {
    Route::get('/dashboard',          [DashboardController::class,'dashboard'])->name('dashboard');

    Route::resource('events',       EventsController       ::class );
    Route::resource('newsletter',   NewsletterController   ::class );
    Route::resource('cells',        CellsController        ::class );
    Route::resource('ministeries',  MinisteriesController  ::class );
    Route::resource('celebrations', CelebrationController  ::class );
    Route::resource('ub',           UniversidadeController ::class );
});
