<?php

use Illuminate\Support\Facades\Route;
use App\Models\AuditLog;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {

    var_dump(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1));
    var_dump($request->server('HTTP_X_FORWARDED_FOR'));
    var_dump($request->server('REMOTE_ADDR'));
    var_dump($request->userAgent());
    var_dump(gethostname());

    $logs = AuditLog::query()->where('created_at', '>', Carbon::now()->subDays(2)->toDateTimeString())->get();
    $apps = AuditLog::query()->distinct('app')->orderBy('app')->get('app');

    return view('pages.home', ['logs' => $logs, 'apps' => $apps]);
});

Route::post('/search', function (Request $request){

    var_dump($request->all());

    $logs = AuditLog::query()->where('created_at', '>', Carbon::now()->subDays(2)->toDateTimeString())->get();
    $apps = AuditLog::query()->distinct('app')->orderBy('app')->get('app');

    return view('pages.home', ['logs' => $logs, 'apps' => $apps]);
});

Route::post('/analyze', function (){

});
