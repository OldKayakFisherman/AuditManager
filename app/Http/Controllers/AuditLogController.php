<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\ViewModels\HomeViewModel;
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
        $selectedApp = null;
        $selectedStartDate = null;
        $selectedEndDate = null;

        if($request->filled('prmStartDate') && $request->filled('prmEndDate'))
        {
            $selectedStartDate = $request->input('prmStartDate');
            $selectedEndDate = $request->input('prmEndDate');

            var_dump('Date');
            $baseQuery->whereBetween('event_date', [$request->input('prmStartDate'), $request->input('prmEndDate')]);
            $filtered = true;
        }

        if($request->filled('prmApp') && Str::length($request->input('prmApp')) > 0)
        {
            $selectedApp = $request->input('prmApp');
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

        var_dump($selectedApp);

        $viewModel = new HomeViewModel
        (
            $logs,
            $apps,
            $selectedApp,
            $selectedStartDate,
            $selectedEndDate
        );

        return view('pages.home', $viewModel);
    }
}
