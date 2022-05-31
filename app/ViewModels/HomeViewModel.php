<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class HomeViewModel extends ViewModel
{
    public $selectedApp = null;
    public $logs = null;
    public $apps = null;

    public function __construct(Collection $logs, Collection $apps, string $selectedApp = null)
    {
        $this->selectedApp = $selectedApp;

    }
}
