<?php

use Illuminate\Support\Facades\Route;
use App\Models\AuditLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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


    $logs = AuditLog::query()->where('created_at', '>', Carbon::now()->subDays(2)->toDateTimeString())->get();
    $apps = AuditLog::query()->distinct('app')->orderBy('app')->get('app');

    return view('pages.home', ['logs' => $logs, 'apps' => $apps]);
});

Route::post('/search', function (Request $request){


    $baseQuery= AuditLog::query();
    $filtered = false;

    if($request->filled('prmStartDate') && $request->filled('prmEndDate'))
    {
        var_dump('Date');
        $baseQuery->whereBetween('event_date', [$request->input('prmStartDate'), $request->input('prmEndDate')]);
        $filtered = true;
    }

    if($request->filled('prmApp') && Str::length($request->input('prmApp')) > 0)
    {
            var_dump($request->input('prmApp'));
            $baseQuery->where('app', '=', $request->input('prmApp'));
            $filtered = true;
    }

    $logs = AuditLog::query()->where('created_at', '>', Carbon::now()->subDays(2)->toDateTimeString())->get();;

    if($filtered === true)
    {
        var_dump('Is Filtered');
        $logs = $baseQuery->get();
    }

    $apps = AuditLog::query()->distinct('app')->orderBy('app')->get('app');

    var_dump($logs);

    return view('pages.home', ['logs' => $logs, 'apps' => $apps]);
});

Route::post('/analyze', function (){

});
