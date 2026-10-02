<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'category' => fake()->randomElement(['web', 'saas', 'cms']),
            'technologies' => ['Laravel', 'Livewire'],
            'url' => null,
            'image_url' => null,
            'sort_order' => 99,
        ];
    }
}
