@extends('_layouts.main')

@section('body')
<div class="max-w-3xl mx-auto px-6">
    {{-- Hero --}}
    <section class="py-16 sm:py-24">
        <div class="flex items-center gap-5 mb-6">
            <img
                src="https://www.gravatar.com/avatar/{{ $page->avatar }}?s=160"
                alt="Andrés Smerkin"
                class="w-16 h-16 rounded-full ring-2 ring-gray-200 dark:ring-gray-700"
            >
            <div>
                <h1 class="text-3xl sm:text-4xl font-bold tracking-tight">Andrés Smerkin</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-1">Software Engineer &amp; Linux Enthusiast</p>
            </div>
        </div>
    </section>

    {{-- Articles --}}
    <section class="pb-20">
        <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-6">Articles</h2>

        <div class="space-y-4">
            @foreach ($articles as $article)
                <a href="{{ $article->getPath() }}" class="article-card block">
                    <time class="text-xs text-gray-400 dark:text-gray-500 font-medium">
                        {{ date('M d, Y', $article->date) }}
                    </time>
                    <h3 class="text-lg font-semibold mt-1 text-gray-900 dark:text-white">
                        {{ $article->title }}
                    </h3>
                </a>
            @endforeach
        </div>
    </section>
</div>
@endsection
