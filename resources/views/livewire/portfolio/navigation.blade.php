<nav class="portfolio-nav fixed inset-x-0 top-0 z-50">
    <div class="mx-auto flex h-[4.5rem] max-w-7xl items-center justify-between px-5 sm:px-8 lg:px-12">
        <a href="#home" wire:click="close" class="nav-brand" aria-label="Lermodious Karanja, home">FT</a>

        <div class="hidden items-center gap-6 lg:flex">
            @foreach(['home' => 'Home', 'about' => 'About', 'skills' => 'Skills', 'projects' => 'Projects', 'experience' => 'Experience', 'education' => 'Education', 'contact' => 'Contact'] as $id => $label)
                <a wire:key="desktop-nav-{{ $id }}" href="#{{ $id }}" class="nav-link">{{ $label }}</a>
            @endforeach
        </div>

        <a href="#contact" class="nav-cta hidden sm:inline-flex">Let’s talk 
            <span aria-hidden="true">↗</span>
        </a>

        <button type="button" wire:click="$set('open', true)" class="rounded-lg p-2 text-slate-300 hover:bg-white/5 hover:text-white lg:hidden" aria-label="Open menu" aria-expanded="{{ $open ? 'true' : 'false' }}" aria-controls="portfolio-mobile-menu">
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    @if($open)
        <div class="fixed inset-0 bg-black/70 lg:hidden" wire:click="close">
        </div>

        <aside id="portfolio-mobile-menu" class="mobile-menu-panel fixed right-0 top-0 h-full w-80 max-w-[85vw] shadow-2xl lg:hidden">
            <div class="flex items-center justify-between border-b border-white/10 p-5">
                <span class="text-sm font-semibold tracking-wide text-slate-200">Explore</span>
                <button type="button" wire:click="close" class="rounded-lg p-2 text-slate-300 hover:bg-white/5" aria-label="Close menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2">
                        <path d="m6 6 12 12M18 6 6 18"/>
                    </svg>
                </button>
            </div>

            <div class="flex flex-col gap-2 p-5">
                @foreach(['home' => 'Home', 'about' => 'About', 'skills' => 'Skills', 'projects' => 'Projects', 'experience' => 'Experience', 'education' => 'Education', 'contact' => 'Contact'] as $id => $label)
                    <a wire:key="mobile-nav-{{ $id }}" href="#{{ $id }}" wire:click="close" class="mobile-menu-link">{{ $label }}</a>
                @endforeach
            </div>
        </aside>
    @endif
</nav>
