<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Income;

Route::get('/incomes', function (Request $request) {

    return Income::all();
});//->middleware('auth:sanctum');
