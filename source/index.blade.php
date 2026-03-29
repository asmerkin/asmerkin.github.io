@extends('_layouts.main')

@section('body')
<div class="max-w-2xl mx-auto px-6">

    {{-- Hero --}}
    <section class="pt-20 pb-16 sm:pt-28 sm:pb-20 fade-up">
        <div class="flex items-start gap-6 mb-8">
            <img
                src="https://www.gravatar.com/avatar/{{ $page->avatar }}?s=200"
                alt="Andrés Smerkin"
                class="w-20 h-20 sm:w-24 sm:h-24 rounded-full ring-2 ring-ink-200 dark:ring-ink-800 shadow-lg flex-shrink-0"
            >
            <div>
                <h1 class="font-display text-4xl sm:text-5xl text-ink-900 dark:text-ink-50 tracking-tight leading-[1.1]">
                    Andrés Smerkin
                </h1>
                <p class="font-mono text-sm text-ink-500 dark:text-ink-400 mt-2 tracking-wide">
                    Software Engineer
                </p>
            </div>
        </div>
        <p class="text-lg text-ink-600 dark:text-ink-300 leading-relaxed max-w-xl">
            Writing about software, open source, and the things I learn along the way.
        </p>

        {{-- Social links --}}
        <div class="flex items-center gap-4 mt-6">
            <a href="https://github.com/asmerkin" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="GitHub">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
            <a href="https://x.com/" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="X (Twitter)">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
        </div>
    </section>

    {{-- Divider --}}
    <div class="ornament fade-up fade-up-delay-1">
        <span class="font-mono text-xs text-ink-400 dark:text-ink-500 tracking-widest uppercase">Writing</span>
    </div>

    {{-- Articles --}}
    <section class="pt-2 pb-24 fade-up fade-up-delay-2">
        @foreach ($articles->sortByDesc('date') as $article)
            <a href="{{ $article->getPath() }}" class="article-card">
                <div class="flex items-center gap-3 mb-2">
                    <time class="font-mono text-xs text-ink-400 dark:text-ink-500 tracking-wide">
                        {{ date('Y.m.d', $article->date) }}
                    </time>
                    @if ($article->category)
                        <span class="badge">{{ $article->category }}</span>
                    @endif
                    @if ($article->language === 'es')
                        <span class="font-mono text-xs text-ink-400 dark:text-ink-500">es</span>
                    @endif
                </div>
                <h3 class="font-display text-2xl sm:text-[1.65rem] text-ink-900 dark:text-ink-50 tracking-tight leading-snug group-hover:text-amber-600 transition-colors">
                    {{ $article->title }}
                </h3>
                @if ($article->excerpt)
                    <p class="text-ink-500 dark:text-ink-400 mt-2 text-[0.95rem] leading-relaxed line-clamp-2">
                        {{ $article->excerpt }}
                    </p>
                @endif
            </a>
        @endforeach
    </section>

</div>
@endsection
