@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('content')
    <article>
        <header>
            <h1 class="font-bold leading-tight xs:text-3xl text-5xl mb-0">{{ $page->title }}</h1>
            <p class="text-sm text-gray-600 mb-6 mr-2">
                <time>{{ date('F j, Y', $page->date) }}</time> • 3 min read •
                <a href="http://twitter.com/share?text=2020%20In%20Review via @jethromay91&amp;url=https%3a%2f%2fjethromay.com%2fposts%2f2020-in-review%2f" onclick="window.open(this.href,'twitter-share','width=550,height=235');return false;">
                    Share
                </a>
            </p>
            @if ($page->categories)
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                >{{ $category }}</a>
            @endforeach
        @endif
        </header>
        <div>
            @yield('postContent')
        </div>
        <footer class="mt-6">
            <a class="text-lg underline text-green-500" href="http://twitter.com/share?text=2020%20In%20Review via @jethromay91&amp;url=https%3a%2f%2fjethromay.com%2fposts%2f2020-in-review%2f" onclick="window.open(this.href,'twitter-share','width=550,height=235');return false;">
                Share on Twitter
            </a>
        </footer>
    </article>
@endsection
