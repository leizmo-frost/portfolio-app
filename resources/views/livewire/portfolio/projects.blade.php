<section id="projects" class="section-shell bg-slate-950">
    <div class="section-container">
        <x-portfolio-heading title="Selected" highlight="Projects" eyebrow="A few things I’ve helped build" />

        <div class="mb-10 flex flex-wrap justify-center gap-3">
            @foreach(['all' => 'All', 'web' => 'Web Apps', 'saas' => 'SaaS / Mobile', 'cms' => 'CMS / Portals'] as $key => $label)
                <button
                    type="button"
                    wire:click="setFilter('{{ $key }}')"
                    class="filter-pill {{ $filter === $key ? 'filter-pill-active' : '' }}"
                >
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <div wire:loading.class="opacity-50" class="grid gap-7 md:grid-cols-2">
            @forelse($projects as $project)
                <article wire:key="project-{{ $project->id }}" class="project-card glass-card overflow-hidden">
                    @if($project->image_url)
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="h-56 w-full object-cover">
                    @else
                        <div class="project-art h-56">
                            <span>{{ str($project->title)->substr(0, 2)->upper() }}</span>
                        </div>
                    @endif

                    <div class="p-7">
                        <div class="mb-4 flex items-start justify-between gap-4">
                            <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                            <span class="rounded-full bg-blue-500/10 px-3 py-1 text-xs uppercase tracking-wider text-blue-400">{{ $project->category }}</span>
                        </div>

                        <p class="mb-5 text-sm leading-7 text-slate-400">{{ $project->description }}</p>

                        <div class="flex flex-wrap gap-2">
                            @foreach($project->technologies ?? [] as $technology)
                                <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">{{ $technology }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-12 text-center text-slate-500">
                    No projects found in this category.
                </div>
            @endforelse
        </div>
    </div>
</section>
