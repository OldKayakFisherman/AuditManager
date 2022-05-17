<?php

use Illuminate\Support\Facades\Route;
use App\Models\AuditLog;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $logs = AuditLog::query()->where('event_date','>', Carbon::yesterday())->get();

    return view('pages.home', ["logs" => $logs]);
});
