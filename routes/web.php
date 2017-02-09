<?php

Route::group(['prefix' => 'cms'],  function () {
    Route::group(['middleware' => ['auth']], function(){

        // ----------------- CORE ROUTES ONLY -----------------

        Route::get('/logout', 'LogOutController@index');
        Route::get('/', 'DashboardController@index');

        // ----------------- GENERIC ROUTES FOR EVERY PROJECT GO HERE -----------------

        Route::resource('page', 'PageController');
        Route::resource('section', 'SectionController');

        // ----------------- CRM ROUTES GO UNDERNEATH HERE -----------------


        // TO DO CLEAN UP NON RESTFUL ROUTES
        Route::get('candidate/mentoren', 'MentorCandidateController@index');
        Route::get('candidate/jongeren', 'YouthCandidateController@index');



        // ----------------- CONTENT MANAGEMENT ROUTES GO UNDERNEATH HERE -----------------

        Route::resource('candidate', 'CandidatesController');
        Route::resource('mentor', 'MentorsController');
        Route::resource('news', 'NewsController');
        Route::resource('youth', 'YouthController');
        Route::resource('page', 'PageController');
        Route::resource('section', 'SectionController');
        Route::resource('partner', 'PartnersController');
        Route::resource('teammember', 'TeamMembersController');
        Route::resource('slider', 'ImageSliderController');
    });
});

// ----------------- AUTH ROUTES GO UNDERNEATH HERE -----------------

Auth::routes();

// ----------------- PAGE ROUTES GO UNDERNEATH HERE -----------------
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
Route::get('/aanmeldingen/nieuwe-jongere-aanmelding', 'CandidatesWebsiteController@createJongere');
Route::get('/aanmeldingen/nieuwe-mentor-aanmelding', 'CandidatesWebsiteController@createMentoren');
Route::get('/home', 'HomeController@index');

// ----------------- ROUTES THAT NEED TO BE CLEANED UP TO RESFUL ROUTES -----------------
Route::post('/mail/contact-mail', 'MailController@contactMail');
Route::post('/mail/jongere-mail', 'MailController@jongereMail');
Route::post('/mail/mentor-mail', 'MailController@mentorMail');
Route::post('/newsletters/subscribe', 'NewslettersWebsiteController@addEmail');