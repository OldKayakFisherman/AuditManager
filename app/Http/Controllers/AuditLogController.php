<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuditLogController extends Controller
{
    //
    public function index(Request $request)
    {
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

        $logs = AuditLog::query()->where('created_at', '>', Carbon::now()->subDays(2)->toDateTimeString())->paginate(10);;

        if($filtered === true)
        {
            var_dump('Is Filtered');
            $logs = $baseQuery->paginate(10);
        }

        $apps = AuditLog::query()->distinct('app')->orderBy('app')->get('app');

        return view('pages.home', ['logs' => $logs, 'apps' => $apps]);
    }
}
