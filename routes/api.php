<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aws\Awscontroller;

Route::prefix('v1')->group(function () {
    Route::post('aws-test', [Awscontroller::class, 'sns']);        
});
