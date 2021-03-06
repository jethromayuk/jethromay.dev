---
title: Blog
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')

@section('body')
<section class="px-6 py-24 max-w-4xl mx-auto space-y-8 divide-y-2 w-full">
    <header class="mb-3">
        <h1 class="text-5xl font-extrabold text-madison">Blog</h1>
    </header>

    @foreach ($pagination->items as $post)
        <article class="pt-4">
            <header class="flex flex-col">
                <h3 class="font-bold text-madison text-3xl leading-snug mr-3 hover:underline">
                    <a href="{{ $post->getUrl() }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-sm text-gray-500 mb-6 mt-1">
                    <time>{{ date('F j, Y', $post->date) }}</time> • {{ $post->estimate_reading_time }}
                </p>
            </header>
            <p class="mt-0 text-lg md:text-xl">
                {{ $post->getExcerpt() }}
            </p>
            <footer class="mt-4">
                <a class="flex items-center text-md text-madison uppercase hover:underline" href="{{ $post->getUrl() }}">
                    Continue reading
                </a>
            </footer>
        </article>
    @endforeach
    @if ($pagination->pages->count() > 1)
    <nav class="flex text-base my-8 border-transparent">
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
    </section>
<x-newsletter />
@stop
