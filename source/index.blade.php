@extends('_layouts.main')

@section('body')
<div class="container mx-auto py-20">
    <h2 class="font-bold text-xl mb-10">My Articles</h2>

    @foreach ($articles as $article)
        <div class="mb-5">
            <a class="font-bold" href="{{ $article->getPath() }}">
                {{ date('d-m-Y', $article->date) }} - 
                {{ $article->title }}
            </a>
        </div>
    @endforeach
</div>
@endsection
