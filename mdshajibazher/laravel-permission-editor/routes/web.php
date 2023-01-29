<?php

use Illuminate\Support\Facades\Route;
use Mdshajibazher\LaravelPermissionEditor\Http\Controllers\RoleController;


Route::resource('roles', RoleController::class);
