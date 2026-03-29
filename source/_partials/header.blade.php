<header class="sticky top-0 z-50 bg-gray-50/80 dark:bg-gray-900/80 backdrop-blur-lg border-b border-gray-200/50 dark:border-gray-700/50">
    <div class="max-w-3xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3 group">
            <img
                src="https://www.gravatar.com/avatar/{{ $page->avatar }}?s=80"
                alt="Andrés Smerkin"
                class="w-8 h-8 rounded-full ring-2 ring-gray-200 dark:ring-gray-700 group-hover:ring-gray-300 dark:group-hover:ring-gray-600 transition-all"
            >
            <span class="font-semibold text-gray-900 dark:text-white">Andrés Smerkin</span>
        </a>
        <nav class="flex items-center gap-4">
            <a href="/" class="nav-link">Blog</a>
            <button id="dark-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors" aria-label="Toggle dark mode">
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                </svg>
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </button>
        </nav>
    </div>
</header>
