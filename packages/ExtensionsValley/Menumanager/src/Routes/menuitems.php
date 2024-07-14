<?php

namespace ExtensionsValley\Menumanager\Controllers;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth:admin']], function () {
    Route::get('/extensionsvalley/menumanager/addmenuitems', [MenuController::class, 'addMenuItems'])
    ->name('extensionsvalley.admin.addmenuitems')
    ->middleware('acl:add');

    Route::get('/extensionsvalley/menumanager/editmenuitems/{id}', [MenuController::class, 'editMenuItems'])
    ->name('extensionsvalley.admin.editmenuitems')
    ->middleware('acl:edit');

    Route::get('/extensionsvalley/menumanager/viewmenuitems/{id}', [MenuController::class, 'viewMenuItems'])
    ->name('extensionsvalley.admin.viewmenuitems')
    ->middleware('acl:view');

    Route::post('/extensionsvalley/menumanager/savemenuitems', [MenuController::class, 'saveMenuItems'])
    ->name('extensionsvalley.admin.savemenuitems')
    ->middleware('acl:add');

    Route::post('/extensionsvalley/menumanager/updatemenuitems', [MenuController::class, 'updateMenuItems'])
    ->name("extensionsvalley.admin.updatemenuitems")
    ->middleware('acl:edit');
});
