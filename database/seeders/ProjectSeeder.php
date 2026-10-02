<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Frost Employment & HR Management System',
                'description' => 'A workforce management platform focused on employee records, HR workflows, reporting, and operational efficiency.',
                'category' => 'web',
                'technologies' => ['Laravel', 'Livewire', 'MySQL', 'Tailwind'],
                'url' => null,
                'image_url' => null,
                'sort_order' => 1,
            ],
            [
                'title' => 'Fedha Financial Management Platform',
                'description' => 'A financial management platform designed around transaction workflows, reporting, and secure data handling.',
                'category' => 'saas',
                'technologies' => ['Laravel', 'Livewire', 'PostgreSQL', 'REST API'],
                'url' => null,
                'image_url' => null,
                'sort_order' => 2,
            ],
            [
                'title' => 'Mobile Transport & SaaS Solutions',
                'description' => 'Transport-focused SaaS solutions with modern interfaces, backend services, and mobile-oriented workflows.',
                'category' => 'saas',
                'technologies' => ['Laravel', 'Livewire', 'PocketBase', 'Tailwind'],
                'url' => null,
                'image_url' => null,
                'sort_order' => 3,
            ],
            [
                'title' => 'KBS News & Content Portal',
                'description' => 'High-traffic WordPress content publishing portal with custom responsive themes, SEO optimization, and editorial workflow tools.',
                'category' => 'cms',
                'technologies' => ['WordPress', 'PHP', 'SEO'],
                'url' => null,
                'image_url' => null,
                'sort_order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}
