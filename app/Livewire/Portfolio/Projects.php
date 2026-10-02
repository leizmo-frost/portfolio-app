<?php

namespace App\Livewire\Portfolio;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public string $filter = 'all';

    public function setFilter(string $filter): void
    {
        $allowed = ['all', 'web', 'saas', 'cms'];

        $this->filter = in_array($filter, $allowed, true) ? $filter : 'all';
    }

    public function render()
    {
        $projects = Project::query()
            ->when(
                $this->filter !== 'all',
                fn ($query) => $query->where('category', $this->filter)
            )
            ->orderBy('sort_order')
            ->get();

        return view('livewire.portfolio.projects', compact('projects'));
    }
}
