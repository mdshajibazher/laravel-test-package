<?php

namespace Mdshajibazher\LaravelPermissionEditor;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PermissionEditorServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {

        Route::prefix('permission-editor')
            ->as('permission-editor.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
    }
}
