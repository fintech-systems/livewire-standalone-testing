<?php

namespace FintechSystems\LivewireStandaloneTesting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-standalone-testing')
            ->hasViews();
    }
}
