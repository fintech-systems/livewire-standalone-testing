<?php

namespace FintechSystems\LivewireStandaloneTesting\Tests\TestSupport;

use FintechSystems\LivewireStandaloneTesting\ComponentServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

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
