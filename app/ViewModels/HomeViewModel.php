<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;


class HomeViewModel extends ViewModel
{
    public $selectedApp = null;
    public $selectedStartDate = null;
    public $selectedEndDate = null;
    public $logs = null;
    public $apps = null;

    public function __construct(Object $logs, Collection $apps, string $selectedApp = null, string $selectedStartDate = null, string $selectedEndDate = null)
    {
        $this->selectedApp = $selectedApp;
        $this->selectedStartDate = $selectedStartDate;
        $this->selectedEndDate = $selectedEndDate;
        $this->apps = $apps;
        $this->logs = $logs;
    }
}
