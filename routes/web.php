<?php

use App\Livewire\BlogDetail;
use App\Livewire\ShowBlog;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowMedisPage;
use App\Livewire\ShowPage;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/layanan', ShowServicePage::class)->name('layananPages');
Route::get('/layanan/{id}', ShowService::class)->name('layananPage');
Route::get('/medis', ShowMedisPage::class)->name('medisPage');
Route::get('/blog', ShowBlog::class)->name('blog');
Route::get('/blog/{id}', BlogDetail::class)->name('blogDetail');
Route::get('/faq', ShowFaqPage::class)->name('faqs');
Route::get('/page/{id}', ShowPage::class)->name('page');