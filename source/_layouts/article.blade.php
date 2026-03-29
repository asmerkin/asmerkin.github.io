@extends('_layouts.main')

@section('body')
<article class="max-w-3xl mx-auto px-6 py-16 sm:py-24">
    <header class="mb-12">
        <a href="/" class="inline-flex items-center gap-1 text-sm text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300 transition-colors mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back
        </a>
        <h1 class="text-3xl sm:text-4xl font-bold tracking-tight">{{ $page->title }}</h1>
        <p class="text-gray-400 dark:text-gray-500 mt-3 text-sm">
            {{ $page->author }} &middot; {{ date('M d, Y', $page->date) }}
        </p>
    </header>

    <div class="prose prose-lg dark:prose-invert prose-gray max-w-none">
        @yield('content')
    </div>
</article>
@endsection
