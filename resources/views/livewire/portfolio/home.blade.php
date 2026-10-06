<div>
    <livewire:portfolio.navigation />

    <main>
        <section id="home" class="hero-gradient relative min-h-screen overflow-hidden pt-16">
            <div class="hero-grid absolute inset-0"></div>
            <div class="hero-orb hero-orb-one"></div>
            <div class="hero-orb hero-orb-two"></div>

            <div class="hero-inner relative z-10 mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl items-center gap-8 px-5 py-16 sm:px-8 lg:grid-cols-[1fr_1fr] lg:gap-0 lg:px-12">
                <div class="hero-copy">
                    <p class="hero-kicker">
                        <span class="availability-dot"></span> Nairobi, Kenya
                        <span class="kicker-divider">/</span> Available for select projects
                    </p>

                    <h1 class="hero-title">I build digital systems
                        <em>that move work forward.</em>
                    </h1>

                    <p class="hero-intro">
                        <strong>Lermodious Karanja</strong> — web artisan and systems administrator turning complex workflows into clear, dependable software.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#projects" class="btn-primary">Explore selected work
                            <span aria-hidden="true">↗</span>
                        </a>
                        <a href="#contact" class="btn-secondary">Start a conversation</a>
                    </div>

                    <div class="hero-specialties" aria-label="Specialties">
                        <span>Laravel & Livewire</span>
                        <span>Linux infrastructure</span>
                    </div>

                    <div class="hero-socials">
                        <a href="mailto:karanjalermodious123@gmail.com" class="icon-link" aria-label="Email">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2">
                                <path d="m3 8 7.89 5.26a2 2 0 0 0 2.22 0L21 8"/>
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                            </svg>
                        </a>
                        <a href="tel:+254792731004" class="icon-link" aria-label="Phone">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2">
                                <path d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.04 11.04 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498A1 1 0 0 1 21 16.28V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z"/>
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="orbital-stage">
                        <div class="orbit orbit-one">
                            <span class="orbit-node"></span>
                        </div>
                        <div class="orbit orbit-two">
                            <span class="orbit-node"></span>
                        </div>
                        <div class="orbit orbit-three">
                            <span class="orbit-node"></span>
                        </div>
                        <div class="system-core">
                            <span>FT</span>
                            <i></i>
                        </div>
                        {{-- <div class="orbit-label orbit-label-top">
                            <span>01</span> SYSTEMS ONLINE
                        </div>
                        <div class="orbit-label orbit-label-bottom">
                            <span>KE</span> BUILT IN NAIROBI
                        </div> --}}
                        {{-- <div class="signal-card signal-card-top">
                            <span class="signal-mark">↗</span>
                            <span>PAYMENTS</span>
                            <b>M-Pesa ready</b>
                        </div> --}}
                        {{-- <div class="signal-card signal-card-bottom">
                            <span class="signal-mark">⌘</span>
                            <span>STACK</span>
                            <b>Laravel · Linux</b>
                        </div> --}}
                    </div>
                    <p class="visual-caption">Engineering with purpose <span>·</span> shipping with care</p>
                </div>
            </div>
        </section>

        <section id="about" class="section-shell bg-slate-950">
            <div class="section-container">
                <x-portfolio-heading title="About" highlight="Me" eyebrow="The person behind the systems" />

                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="workspace-art">
                        <div class="workspace-window">
                            <div class="flex gap-2 border-b border-white/10 p-4">
                                <span class="h-3 w-3 rounded-full bg-red-400/80"></span>
                                <span class="h-3 w-3 rounded-full bg-yellow-400/80"></span>
                                <span class="h-3 w-3 rounded-full bg-green-400/80"></span>
                            </div>
                            <div class="space-y-4 p-7 font-mono text-sm text-slate-400">
                                <p><span class="text-blue-400">$</span> whoami</p>
                                <p class="text-slate-200">lermodious@portfolio:~$ web artisan</p>
                                <p><span class="text-blue-400">$</span> stack --show</p>
                                <p class="text-violet-300">Laravel · Livewire · PHP · Linux · Databases</p>
                                <p><span class="text-blue-400">$</span> status</p>
                                <p class="text-emerald-400">available_for_projects=true</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-4 text-2xl font-semibold text-blue-400">Who am I?</h3>
                        <p class="mb-6 leading-8 text-slate-400">
                            Results-driven web artisan and IT Systems Administrator with a Diploma in ICT
                            and extensive experience engineering web applications, backend APIs, and enterprise IT infrastructure.
                            Proficient in PHP, Laravel, Livewire, NativePHP, JavaScript, MySQL, PostgreSQL, PocketBase,
                            and Linux server environments.
                        </p>
                        <p class="mb-8 leading-8 text-slate-400">
                            Adept in full SDLC management, M-Pesa and secure payment gateway integrations, database performance
                            tuning, and cross-functional end-user IT support.
                        </p>

                        <div class="grid grid-cols-2 gap-4">
                            <x-portfolio-stat value="3+" label="Years Experience" />
                            <x-portfolio-stat value="10+" label="Projects Delivered" />
                            <x-portfolio-stat value="99.8%" label="Server Uptime" />
                            <x-portfolio-stat value="30%" label="Performance Boost" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section-shell bg-slate-900/60">
            <div class="section-container">
                <x-portfolio-heading title="Technical" highlight="Skills" eyebrow="Tools I work with" />

                <div class="grid gap-8 lg:grid-cols-3">
                    <x-skill-card
                        title="Backend & Frameworks"
                        :skills="[
                            ['name' => 'PHP / Laravel / Livewire', 'value' => 95],
                            ['name' => 'JavaScript / HTML5 / CSS3', 'value' => 90],
                            ['name' => 'NativePHP / Tailwind / Bootstrap', 'value' => 85],
                        ]"
                    />

                    <x-skill-card
                        title="Databases & Cloud"
                        :skills="[
                            ['name' => 'MySQL / PostgreSQL / SQLite', 'value' => 92],
                            ['name' => 'PocketBase / Supabase / Firebase', 'value' => 88],
                            ['name' => 'RESTful APIs / M-Pesa Integration', 'value' => 90],
                        ]"
                    />

                    <div class="glass-card p-7">
                        <div class="mb-5 flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/10 text-pink-400">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-none stroke-current stroke-2"><path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/><path d="m19.4 15 .1.1a2 2 0 0 1-2.8 2.8l-.1-.1a2 2 0 0 0-3.4 1.4V19a2 2 0 0 1-4 0v-.2a2 2 0 0 0-3.4-1.4l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1A2 2 0 0 0 3.6 11H3a2 2 0 0 1 0-4h.2a2 2 0 0 0 1.4-3.4l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1A2 2 0 0 0 10.8 2H11a2 2 0 0 1 4 0v.2a2 2 0 0 0 3.4 1.4l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1A2 2 0 0 0 22 7h.2a2 2 0 0 1 0 4H22a2 2 0 0 0-1.4 3.4l.1.1Z"/></svg>
                            </div>
                            <h3 class="text-xl font-semibold">DevOps & Systems</h3>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            @foreach(['Linux (CachyOS/Ubuntu)', 'Docker', 'Git/GitHub', 'Composer/npm', 'Postman', 'Fish Shell'] as $skill)
                                <span class="rounded-lg bg-slate-800 px-4 py-2 text-sm text-slate-300">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <livewire:portfolio.projects />

        <section id="experience" class="section-shell bg-slate-900/60">
            <div class="section-container">
                <x-portfolio-heading title="Work" highlight="Experience" />

                <div class="relative mx-auto max-w-5xl">
                    <div class="timeline-line absolute bottom-0 left-4 top-0 w-px md:left-1/2"></div>

                    @php
                        $experience = [
                            ['date' => 'Sep 2024 – Present', 'role' => 'IT / Systems Administration', 'company' => 'KBS', 'text' => 'Supported enterprise IT operations, systems, infrastructure, software environments, and end-user technology workflows.'],
                            ['date' => 'Jan 2023 – Present', 'role' => 'Freelance IT Consultant & Web Developer', 'company' => 'Self-Employed', 'text' => 'End-to-end IT consulting and full-stack web development for SMEs, including Laravel/Livewire/WordPress projects, Linux servers, SSL, backups, hardware diagnostics, and LAN installations.'],
                            ['date' => 'Feb 2024 – May 2024', 'role' => 'Web Developer (Contract)', 'company' => 'Abno Software International', 'text' => 'Developed scalable enterprise web applications with Laravel, MySQL and REST APIs. Worked on database performance, payment gateways, Git workflows, and code reviews.'],
                            ['date' => 'Feb 2024 – May 2024', 'role' => 'IT Support Technician', 'company' => 'County Government of Bungoma', 'text' => 'Administered hardware and network infrastructure, workstation deployment, LAN configuration, troubleshooting, and secure access policies.'],
                        ];
                    @endphp

                    <div class="space-y-10">
                        @foreach($experience as $index => $item)
                            <article wire:key="experience-{{ $index }}" class="relative md:grid md:grid-cols-2 md:gap-12">
                                <div class="{{ $index % 2 === 0 ? 'md:text-right' : 'md:col-start-2' }} pl-10 md:pl-0">
                                    <div class="glass-card p-6">
                                        <span class="mb-3 inline-flex rounded-full bg-blue-500/10 px-3 py-1 text-sm text-blue-400">{{ $item['date'] }}</span>
                                        <h3 class="text-xl font-bold">{{ $item['role'] }}</h3>
                                        <h4 class="mt-1 text-violet-400">{{ $item['company'] }}</h4>
                                        <p class="mt-3 text-sm leading-7 text-slate-400">{{ $item['text'] }}</p>
                                    </div>
                                </div>
                                <span class="absolute left-2 top-7 h-5 w-5 rounded-full border-4 border-slate-950 bg-blue-500 md:left-1/2 md:-translate-x-1/2"></span>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="education" class="section-shell bg-slate-950">
            <div class="section-container">
                <x-portfolio-heading title="Education &" highlight="Certifications" eyebrow="Learning for the long run" />

                <div class="grid gap-8 lg:grid-cols-2">
                    <div>
                        <h3 class="mb-6 text-2xl font-semibold">Education</h3>
                        <div class="space-y-5">
                            <div class="glass-card p-6">
                                <h4 class="text-lg font-bold">Diploma in ICT</h4>
                                <p class="mt-1 text-blue-400">Mathenge Technical Training Institute</p>
                                <p class="mt-2 text-sm leading-7 text-slate-400">Comprehensive training in software development, networking, and systems administration.</p>
                            </div>
                            <div class="glass-card p-6">
                                <h4 class="text-lg font-bold">KCSE Certificate</h4>
                                <p class="mt-1 text-blue-400">Teremi Boys High School</p>
                                <p class="mt-2 text-sm leading-7 text-slate-400">Kenya Certificate of Secondary Education.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-6 text-2xl font-semibold">Certifications</h3>
                        <div class="space-y-5">
                            @foreach([
                                ['web artisan', 'Laravel, Livewire, NativePHP, Modern Web APIs'],
                                ['Linux Systems Administration & Shell Scripting', 'CachyOS '],
                                ['Hardware Diagnostics', 'Network configuration'],
                            ] as $cert)
                                <div wire:key="certification-{{ $loop->index }}" class="glass-card p-6">
                                    <h4 class="font-bold text-emerald-400">{{ $cert[0] }}</h4>
                                    <p class="mt-2 text-sm text-slate-400">{{ $cert[1] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section-shell bg-slate-900/60">
            <div class="section-container">
                <x-portfolio-heading title="Get In" highlight="Touch" eyebrow="Have a good problem to solve?" />

                <div class="grid gap-12 lg:grid-cols-2">
                    <div>
                        <h3 class="mb-7 text-2xl font-semibold">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="contact-row">
                                <span class="contact-icon">✉</span>
                                <div>
                                    <p class="text-sm text-slate-500">Email</p>
                                    <a href="mailto:karanjalermodious123@gmail.com" class="font-medium hover:text-blue-400">karanjalermodious123@gmail.com</a>
                                </div>
                            </div>
                            <div class="contact-row">
                                <span class="contact-icon">☎</span>
                                <div>
                                    <p class="text-sm text-slate-500">Phone</p>
                                    <a href="tel:+254792731004" class="font-medium hover:text-blue-400">+254 792 731 004</a>
                                </div>
                            </div>
                            <div class="contact-row">
                                <span class="contact-icon">⌖</span>
                                <div>
                                    <p class="text-sm text-slate-500">Location</p>
                                    <p class="font-medium">Nairobi, Kenya</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:portfolio.contact-form />
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/5 bg-slate-950 py-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-4 sm:px-6 md:flex-row lg:px-8">
            <p class="text-sm text-slate-500"><span class="gradient-text font-bold">FT</span> © {{ now()->year }} Frost Tech. All rights reserved.</p>
            <div class="flex gap-6 text-sm text-slate-500">
                <a href="#home" class="hover:text-blue-400">Home</a>
                <a href="#about" class="hover:text-blue-400">About</a>
                <a href="#projects" class="hover:text-blue-400">Projects</a>
                <a href="#contact" class="hover:text-blue-400">Contact</a>
            </div>
        </div>
    </footer>

    <a href="#home" class="back-top" aria-label="Back to top">
        ↑
    </a>
</div>
