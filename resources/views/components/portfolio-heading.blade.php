@props(['title', 'highlight', 'eyebrow' => 'Portfolio'])

<div class="portfolio-heading">
    <p>{{ $eyebrow }}</p>
    <h2 class="text-4xl font-black tracking-tight sm:text-5xl">
        {{ $title }} <span class="gradient-text">{{ $highlight }}</span>
    </h2>
</div>
