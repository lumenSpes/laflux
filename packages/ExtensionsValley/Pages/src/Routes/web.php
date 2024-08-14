<?php

Route::get('/{slug}', [
    'name' => 'Front Page',
    'as' => 'extensionsvalley.web.getpage',
    'uses' => '\ExtensionsValley\Pages\Controllers\FrontPageController@getPage',
]);

