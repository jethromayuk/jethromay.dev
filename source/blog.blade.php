---
title: Blog
description: The list of blog posts for the site
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.main')

@section('body')
<article class="py-24 max-w-4xl mx-auto w-full" itemtype="http://schema.org/Article">
    <header class="mb-3">
        <h1 class="text-5xl font-extrabold">Blog</h1>
    </header>
    @foreach ($pagination->items as $post)
        {{-- @include('_components.post-preview-inline') --}}

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach
    @if ($pagination->pages->count() > 1)
    <nav class="flex text-base my-8">
        @if ($previous = $pagination->previous)
            <a href="{{ $previous }}"
                title="Previous Page"
                class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
            >&LeftArrow;</a>
        @endif

        @foreach ($pagination->pages as $pageNumber => $path)
            <a
                href="{{ $path }}"
                title="Go to Page {{ $pageNumber }}"
                class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
            >{{ $pageNumber }}</a>
        @endforeach

        @if ($next = $pagination->next)
            <a
                href="{{ $next }}"
                title="Next Page"
                class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
            >&RightArrow;</a>
            @endif
        </nav>
    @endif
</article>
<section class="bg-niagara py-12">
    <div class="max-w-6xl mx-auto w-full">
        <h2 class="text-4xl text-white text-center">
            Join My Mailing List
        </h2>
    </div>
</section>
@stop
