<header class="sticky top-0 z-50 bg-ink-50/90 dark:bg-ink-950/90 backdrop-blur-md">
    <div class="max-w-2xl mx-auto px-6 py-5 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3 group" aria-label="Home">
            <img
                src="https://www.gravatar.com/avatar/{{ $page->avatar }}?s=80"
                alt="Andrés Smerkin"
                class="w-9 h-9 rounded-full ring-2 ring-ink-200 dark:ring-ink-700 group-hover:ring-amber-400 transition-all duration-300"
            >
            <span class="font-display text-xl text-ink-900 dark:text-ink-50 tracking-tight">Andrés Smerkin</span>
        </a>
        <nav class="flex items-center gap-5" aria-label="Main navigation">
            <a href="/" class="nav-link">blog</a>
            <a href="/projects" class="nav-link">projects</a>
            <button id="dark-toggle" class="theme-toggle" aria-label="Toggle dark mode">
                <svg class="w-[18px] h-[18px] block dark:hidden" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"/>
                </svg>
                <svg class="w-[18px] h-[18px] hidden dark:block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                </svg>
            </button>
        </nav>
    </div>
    <div class="h-px bg-ink-200/60 dark:bg-ink-800/60"></div>
</header>
