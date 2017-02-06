<?php

// API


// Pages get routes
Route::get('/', 'PagesController@indexHome');
Route::get('/contact', 'PagesController@contact');
Route::get('/aanmelden-als-jongere', 'PagesController@jongerenAanmelden');
Route::get('/folder-mentor', 'FilesController@mentorFolder');
Route::get('/folder-jongere', 'FilesController@jongereFolder');
Route::get('/aanmelden-als-mentor', 'PagesController@mentorenAanmelden');
Route::get('/behaalde-resultaten', 'PagesController@resultaten');
Route::get('/mentor4you', 'PagesController@overons');
Route::get('/werkgebied', 'PagesController@werkgebied');
Route::get('/team', 'PagesController@team');
Route::get('/steun-ons', 'PagesController@steunons');
Route::get('/ervaringen', 'PagesController@ervaringen');

Route::get('/actueel', 'PagesController@actueel');
Route::get('/actueel/{title}-{id}', 'PagesController@doorklikActueel');
Route::get('/home', 'HomeController@index');
Route::get('/aanmeldingen/nieuwe-jongere-aanmelding', 'CandidatesWebsiteController@createJongere');
Route::get('/aanmeldingen/nieuwe-mentor-aanmelding', 'CandidatesWebsiteController@createMentoren');

// resource routes
Route::resource('Page', 'PagesController');
Route::resource('Section', 'PageSectionsController');

// mail routes
Route::post('/mail/contact-mail', 'MailController@contactMail');
Route::post('/mail/jongere-mail', 'MailController@jongereMail');
Route::post('/mail/mentor-mail', 'MailController@mentorMail');
Route::post('/newsletters/subscribe', 'NewslettersWebsiteController@addEmail');

// authentication
Route::auth();


Route::group(['prefix' => 'cms', 'middleware' => ['auth'] ], function () {
// cms routes

    // get routes
    Route::get('/', function(){ return view('cms.cms'); });
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('candidate/mentoren', 'CandidatesController@mentoren');
    Route::get('candidate/jongeren', 'CandidatesController@jongeren');

    // resources controllers
    Route::resource('candidate', 'CandidatesController');
    Route::resource('mentor', 'MentorsController');
    Route::resource('news', 'NewsController');
    Route::resource('youth', 'YouthController');
    Route::resource('page', 'PageController');
    Route::resource('section', 'SectionController');
    Route::resource('partner', 'PartnersController');
    Route::resource('teammember', 'TeamMembersController');
    Route::resource('slider', 'ImageSliderController');

    // photo upload routes
    Route::post('/partner/{id}/photos', 'PartnersController@addPhoto');
    Route::post('/section/{id}/photos', 'PageSectionsController@addPhoto');
    Route::post('/news/{id}/photos', 'NewsController@addPhoto');
    Route::post('/youth/{id}/photos', 'YouthController@addPhoto');
    Route::post('/mentor/{id}/photos', 'MentorsController@addPhoto');

});