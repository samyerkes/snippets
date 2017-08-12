<?php

namespace App\Providers;

use DaveJamesMiller\Breadcrumbs\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    public function registerBreadcrumbs()
    {
        require base_path('app/Http/Breadcrumbs/breadcrumbs.php');
    }
}