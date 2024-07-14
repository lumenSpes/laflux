<?php

    Route::get('/', [
        'name' => 'Home Page',
        'as' => 'extensionsvalley.web.home',
        'uses' => 'ExtensionsValley\Basetheme\WebSiteController@getIndex',
    ]);
Route::group(['middleware' => 'web'], function () {
    Route::get('/submitcontact', [
        'name' => 'Contact Form',
        'as' => 'extensionsvalley.web.contactform',
        'uses' => 'ExtensionsValley\Basetheme\WebSiteController@SubmitContactform',
    ]);
});
    if(file_exists(base_path('routes/web.php'))){
        require base_path('routes/web.php');
    }

