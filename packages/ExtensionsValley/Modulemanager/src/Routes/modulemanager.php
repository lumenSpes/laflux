<?php

use ExtensionsValley\Modulemanager\Controllers\ModuleController;

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth:admin']], function () {
    Route::get('/extensionsValley/modulemanager/positionmanager', [ModuleController::class, 'viewModuleManager'])
        ->middleware('acl')
        ->name('extensionsvalley.admin.viewmodulemanager');

    Route::get('/extensionsValley/modulemanager/addmodules/{position}', [ModuleController::class, 'addModules'])
        ->name('extensionsvalley.admin.addmodules');

    Route::get('/extensionsValley/modulemanager/getmoduleparam', [ModuleController::class, 'getModuleParam'])
        ->name('extensionsvalley.admin.getmoduleparam');

    Route::get('/extensionsValley/modulemanager/removemodules', [ModuleController::class, 'removeModules'])
        ->middleware('acl:trash')
        ->name('extensionsvalley.admin.removemodules');

    Route::post('/extensionsValley/modulemanager/savemodules', [ModuleController::class, 'saveModules'])
        ->middleware('acl:add')
        ->name('extensionsvalley.admin.savemodules');
});

