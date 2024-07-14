<?php

namespace ExtensionsValley\Menumanager\Controllers;

use ExtensionsValley\Menumanager\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth:admin']], function () {
    Route::get('/extensionsvalley/menumanager/addmenutypes', [MenuController::class, 'addMenuTypes'])
    ->name('extensionsvalley.admin.addmenutypes')
    ->middleware('acl:add');

    Route::get('/extensionsvalley/menumanager/editmenutypes/{id}', [MenuController::class, 'editMenuTypes'])
    ->name('extensionsvalley.admin.editmenutypes')
    ->middleware('acl:edit');

    Route::get('/extensionsvalley/menumanager/viewmenutypes/{id}', [MenuController::class, 'viewMenuTypes',])->middleware('acl:view')
    ->name('extensionsvalley.admin.viewmenutypes');

    Route::post('/extensionsvalley/menumanager/savemenutypes', [MenuController::class, 'saveMenuTypes'])->middleware('acl:add')
    ->name('extensionsvalley.admin.savemenutypes');

    Route::post('/extensionsvalley/menumanager/updatemenutypes', [MenuController::class, 'updateMenuTypes'])->middleware('acl:edit')
    ->name('extensionsvalley.admin.updatemenutypes');
});
