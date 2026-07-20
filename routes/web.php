<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

Route::get('/layanan', [PageController::class, 'services'])->name('services.index');
Route::get('/layanan/{service:slug}', [PageController::class, 'serviceDetail'])->name('services.show');

Route::get('/portofolio', [PageController::class, 'portfolios'])->name('portfolios.index');
Route::get('/portofolio/{portfolio:slug}', [PageController::class, 'portfolioDetail'])->name('portfolios.show');

Route::get('/berita', [PageController::class, 'articles'])->name('articles.index');
Route::get('/berita/{article:slug}', [PageController::class, 'articleDetail'])->name('articles.show');

Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PageController::class, 'sendContact'])->name('contact.send');

Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');