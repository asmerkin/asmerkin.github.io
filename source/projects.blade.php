@extends('_layouts.main')

@section('body')
<div class="max-w-2xl mx-auto px-6">

    <section class="pt-20 pb-16 sm:pt-28 sm:pb-20 fade-up">
        <h1 class="font-display text-4xl sm:text-5xl text-ink-900 dark:text-ink-50 tracking-tight leading-[1.1]">
            Projects
        </h1>
        <p class="text-lg text-ink-600 dark:text-ink-300 leading-relaxed max-w-xl mt-4">
            Things I've built and keep building.
        </p>
    </section>

    <section class="pb-24 space-y-6 fade-up fade-up-delay-1">

        {{-- Finerdy --}}
        <a href="https://finerdy.app" target="_blank" rel="noopener noreferrer" class="project-card block">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <h2 class="font-display text-2xl text-ink-900 dark:text-ink-50 tracking-tight">Finerdy</h2>
                        <span class="badge">SaaS</span>
                    </div>
                    <p class="font-mono text-xs text-ink-400 dark:text-ink-500 tracking-wide mb-3">finerdy.app</p>
                    <p class="text-ink-600 dark:text-ink-300 leading-relaxed">
                        Personal finance app for people who earn and spend in multiple currencies.
                        One ledger, all your currencies &mdash; unified reports in a single reference currency
                        without mental math across dollars, euros, and pesos.
                    </p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="tag">Multi-currency</span>
                        <span class="tag">Finance</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">Private Beta</span>
                    </div>
                </div>
                <svg class="w-5 h-5 text-ink-300 dark:text-ink-600 flex-shrink-0 mt-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                </svg>
            </div>
        </a>

        {{-- Sudoku --}}
        <a href="/sudoku" class="project-card block">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <h2 class="font-display text-2xl text-ink-900 dark:text-ink-50 tracking-tight">Sudoku</h2>
                        <span class="badge">Game</span>
                    </div>
                    <p class="font-mono text-xs text-ink-400 dark:text-ink-500 tracking-wide mb-3">andressmerkin.com/sudoku</p>
                    <p class="text-ink-600 dark:text-ink-300 leading-relaxed">
                        Browser-based Sudoku with seeded puzzle generation, real-time multiplayer,
                        and 4 difficulty levels. Installable as a PWA, works offline, with shareable puzzles via URL.
                    </p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="tag">PWA</span>
                        <span class="tag">Multiplayer</span>
                        <span class="tag">Seeded Puzzles</span>
                        <span class="tag">Offline</span>
                    </div>
                </div>
                <svg class="w-5 h-5 text-ink-300 dark:text-ink-600 flex-shrink-0 mt-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </div>
        </a>

    </section>

</div>
@endsection
