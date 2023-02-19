<?php

namespace FintechSystems\LivewireStandaloneTesting\Tests\TestSupport;

use Illuminate\Support\Facades\View;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use FintechSystems\LivewireStandaloneTesting\ComponentServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        config()->set('app.key', '6rE9Nz59bGRbeMATftriyQjrpF7DcOQm');
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            ComponentServiceProvider::class,
        ];
    }

}
