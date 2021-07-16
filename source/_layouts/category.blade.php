@extends('_layouts.main')

@section('body')
    <section class="py-24 max-w-4xl mx-auto w-full">
        <header class="mb-3">
            <h1 class="text-5xl font-extrabold text-madison">{{ ucfirst($page->title) }}</h1>
        </header>

        <div class="text-2xl border-b border-blue-200 mb-6 pb-10">
            @yield('content')
        </div>
        @foreach ($page->posts($posts) as $post)
        <article class="pt-12">
            <header class="flex flex-col">
                <h3 class="text-madison text-3xl leading-snug mr-3 hover:underline">
                    <a href="{{ $post->getUrl() }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-sm text-gray-500 mb-6 mt-1">
                    <time>{{ date('F j, Y', $post->date) }}</time> • {{ $post->estimate_reading_time }}
                </p>
            </header>
            <p class="text-xl">
                {{ $post->description }}
            </p>
            <footer class="mt-4">
                <a class="flex items-center text-xl text-madison hover:underline" href="{{ $post->getUrl() }}">
                    Read More
                </a>
            </footer>
        </article>
        @endforeach
    </section>
    <x-newsletter />
@stop
