<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProgramChartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student-program-chart', [StudentProgramChartController::class, 'index']);
