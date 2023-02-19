<?php

namespace FintechSystems\LivewireStandaloneTesting\Components;

use Livewire\Component;

class LivewireTestComponent extends Component
{
    public $name = "Joe Bloggs";

    public function render()
    {
        return view('livewire-standalone-testing::test-component');
    }
}
