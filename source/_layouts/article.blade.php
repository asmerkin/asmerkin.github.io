@extends('_layouts.main')

@section('body')
    <div class="container mx-auto">
        <h1 class="text-center text-5xl font-semibold max-w-xl mx-auto">{{ $page->title }}</h1>
        <p class="text-center text-gray-500 mt-1 text-sm">{{ $page->author }} - {{ date('d-m-Y', $page->date )}}</p>
    
        <div class="max-w-2xl prose-lg mx-auto mt-20">
            @yield('content')
        </div>
    </div>
@endsection