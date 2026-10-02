<?php

use App\Livewire\Portfolio\Projects;
use App\Models\Project;
use Livewire\Livewire;

it('renders the portfolio home page', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Lermodious Karanja');
});

it('filters portfolio projects with Livewire', function () {
    Project::factory()->create([
        'category' => 'web',
        'title' => 'Web Test Project',
    ]);

    Project::factory()->create([
        'category' => 'cms',
        'title' => 'CMS Test Project',
    ]);

    Livewire::test(Projects::class)
        ->set('filter', 'web')
        ->assertSee('Web Test Project')
        ->assertDontSee('CMS Test Project');
});
