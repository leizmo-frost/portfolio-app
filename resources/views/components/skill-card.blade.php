@props(['title', 'skills' => []])

<div class="glass-card p-7">
    <div class="mb-6 flex items-center gap-4">
        <div class="skill-icon">
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2"><path d="M8 9 4 12l4 3M16 9l4 3-4 3M14 5l-4 14"/></svg>
        </div>
        <h3 class="text-xl font-semibold">{{ $title }}</h3>
    </div>

    <div class="space-y-5">
        @foreach($skills as $skill)
            <div>
                <div class="mb-2 flex justify-between gap-4 text-sm">
                    <span class="text-slate-400">{{ $skill['name'] }}</span>
                    <span class="skill-value">{{ $skill['value'] }}%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-progress" style="width: {{ $skill['value'] }}%"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
