<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/services', 'frontend.services')->name('services');
Route::view('/flats-for-sale', 'frontend.flats-for-sale')->name('flats-for-sale');
Route::view('/flats-for-rent', 'frontend.flats-for-rent')->name('flats-for-rent');
Route::view('/commercial-spaces', 'frontend.commercial-spaces')->name('commercial-spaces');
Route::view('/property-detail', 'frontend.property-detail')->name('property-detail');
Route::view('/property-detail-commercial', 'frontend.property-detail-commercial')->name('property-detail-commercial');
Route::view('/property-detail-rent', 'frontend.property-detail-rent')->name('property-detail-rent');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/privacy-policy', 'frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-conditions', 'frontend.terms-conditions')->name('terms-conditions');
Route::view('/store', 'frontend.store')->name('store');
Route::view('/listings', 'frontend.listings')->name('listings');
Route::view('/store', 'frontend.store')->name('store');
Route::view('/welcome', 'frontend.welcome')->name('welcome');

Auth::routes();

