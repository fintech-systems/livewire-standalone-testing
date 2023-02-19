<?php

use FintechSystems\LivewireStandaloneTesting\Components\LivewireTestComponent;
use Livewire\Livewire;

it('can render the component', function () {
    $component = Livewire::test(LivewireTestComponent::class);

    $component->assertStatus(200);
});

it('can read a public variable on the component', function () {
    Livewire::test(LivewireTestComponent::class)
        ->assertSee('Joe Bloggs');
});
