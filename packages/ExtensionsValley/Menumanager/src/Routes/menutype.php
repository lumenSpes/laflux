<?php

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth:admin']], function () {
    Route::get('/extensionsvalley/menumanager/addmenutypes', [
        'middleware' => 'acl:add',
        'name' => 'Add Menumanager',
        'as' => 'extensionsvalley.admin.addmenutypes',
        'uses' => '\ExtensionsValley\Menumanager\Controllers\MenuController@addMenuTypes',
    ]);
    Route::get('/extensionsvalley/menumanager/editmenutypes/{id}', [
        'middleware' => 'acl:edit',
        'name' => 'Edit Menumanager',
        'as' => 'extensionsvalley.admin.editmenutypes',
        'uses' => '\ExtensionsValley\Menumanager\Controllers\MenuController@editMenuTypes',
    ]);
    Route::get('/extensionsvalley/menumanager/viewmenutypes/{id}', [
        'middleware' => 'acl:view',
        'name' => 'view Menumanager',
        'as' => 'extensionsvalley.admin.viewmenutypes',
        'uses' => '\ExtensionsValley\Menumanager\Controllers\MenuController@viewMenuTypes',
    ]);
    Route::post('/extensionsvalley/menumanager/savemenutypes', [
        'middleware' => 'acl:add',
        'name' => 'Save Menumanager',
        'as' => 'extensionsvalley.admin.savemenutypes',
        'uses' => '\ExtensionsValley\Menumanager\Controllers\MenuController@saveMenuTypes',
    ]);
    Route::post('/extensionsvalley/menumanager/updatemenutypes', [
        'middleware' => 'acl:edit',
        'name' => 'Update Menumanager',
        'as' => 'extensionsvalley.admin.updatemenutypes',
        'uses' => '\ExtensionsValley\Menumanager\Controllers\MenuController@updateMenuTypes',
    ]);
});
