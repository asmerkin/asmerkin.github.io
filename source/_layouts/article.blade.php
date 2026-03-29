@extends('_layouts.main')

@section('body')
<div id="reading-progress" class="reading-progress" style="width: 0%"></div>

<article class="max-w-2xl mx-auto px-6 pt-12 pb-24 sm:pt-20">
    <header class="mb-14 fade-up">
        <a href="/" class="inline-flex items-center gap-1.5 font-mono text-xs text-ink-400 dark:text-ink-500 hover:text-amber-600 dark:hover:text-amber-400 transition-colors tracking-wide uppercase mb-8">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
            back
        </a>

        @if ($page->category)
            <span class="badge mb-4 block w-fit">{{ $page->category }}</span>
        @endif

        <h1 class="font-display text-4xl sm:text-5xl text-ink-900 dark:text-ink-50 tracking-tight leading-[1.1]">
            {{ $page->title }}
        </h1>

        <div class="flex items-center gap-3 mt-6 font-mono text-sm text-ink-400 dark:text-ink-500 tracking-wide">
            <img
                src="https://www.gravatar.com/avatar/{{ $page->avatar }}?s=48"
                alt="{{ $page->author }}"
                class="w-6 h-6 rounded-full"
            >
            <span>{{ $page->author }}</span>
            <span class="text-ink-300 dark:text-ink-700">/</span>
            <time>{{ date('M d, Y', $page->date) }}</time>
        </div>
    </header>

    <div class="prose prose-lg dark:prose-invert max-w-none fade-up fade-up-delay-1">
        @yield('content')
    </div>

    {{-- Article footer --}}
    <footer class="mt-20 pt-8 border-t border-ink-200 dark:border-ink-800 fade-up fade-up-delay-2">
        <a href="/" class="inline-flex items-center gap-2 font-mono text-sm text-ink-400 dark:text-ink-500 hover:text-amber-600 dark:hover:text-amber-400 transition-colors tracking-wide">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
            All articles
        </a>
    </footer>
</article>
@endsection
