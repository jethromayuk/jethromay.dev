@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')
    <article id="post" class="max-w-4xl mx-auto px-6 py-12 w-full lg:py-24">
        <header class="mb-6">
            <h1 class="font-extrabold leading-tight text-madison text-3xl mb-2 lg:text-5xl">{{ $page->title }}</h1>
            <p class="text-sm text-gray-600 mb-6 mr-2">
                <time>{{ date('F j, Y', $page->date) }}</time> • {{ $page->estimate_reading_time }} •
                <a href="http://twitter.com/share?text={{ $page->title }} via @jethromayuk&amp;url=https://jethromay.dev{{ $page->getUrl() }}" onclick="window.open(this.href,'twitter-share','width=550,height=235');return false;">
                    Share
                </a>
            </p>
            @if ($page->categories)
                <ul class="flex items-center">
                    @foreach ($page->categories as $i => $category)
                    <li>
                        <a
                            href="{{ '/blog/categories/' . $category }}"
                            title="View posts in {{ $category }}"
                            class="inline-block bg-gray-300 hover:bg-gray-400 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                        >{{ $category }}</a>
                    </li>
                    @endforeach
                </ul>
            @endif
        </header>
        <div class="max-w-full text-lg">
            @yield('content')
        </div>
        <footer class="mt-6">
            <a class="text-xl underline text-niagara hover:text-niagara-light" href="http://twitter.com/share?text={{ $page->title }} via @jethromayuk&amp;url=https://jethromay.dev{{ $page->getUrl() }}" onclick="window.open(this.href,'twitter-share','width=550,height=235');return false;">
                Share on Twitter
            </a>
        </footer>
    </article>
    <x-newsletter />
@endsection
