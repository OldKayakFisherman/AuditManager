<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\Object_;
use Spatie\ViewModels\ViewModel;
use lluminate\Pagination\LengthAwarePaginator;

class HomeViewModel extends ViewModel
{
    public $selectedApp = null;
    public $selectedStartDate = null;
    public $selectedEndDate = null;
    public $logs = null;
    public $apps = null;

    public function __construct(Object $logs, Collection $apps, string $selectedApp = null, date $selectedStartDate = null, date $selectedEndDate = null)
    {
        $this->selectedApp = $selectedApp;
        $this->selectedStartDate = $selectedStartDate;
        $this->selectedEndDate = $selectedEndDate;
        $this->apps = $apps;
        $this->logs = $logs;
    }
}
