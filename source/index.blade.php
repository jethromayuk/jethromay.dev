@extends('_layouts.main')

@section('body')
    <section class="bg-madison flex items-center" style="min-height: calc(100vh - 124px)">
        <div class="flex flex-grow items-center justify-between mx-auto max-w-5xl">
            <div class="">
                <h1 class="font-extrabold text-green-500 text-5xl tracking-tight -ml-1 lg:text-6xl">Hey, I'm Jethro.</h1>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I'm a South African Laravel developer, living and working in South Africa. I love tech, learning and <a href="#" class="font-semibold text-green-500 underline">sharing what I know</a>.</p>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I currently work for <a href="#" target="_blank" class="font-semibold text-green-500 underline">Minttwist</a>, a full-service digital agency in London.</p>
            </div>
            <div class="">
                <img class="relative rounded-lg shadow-lg z-10 lg:max-w-xs" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </div>
    </section>
    <section class="bg-white pt-12 pb-24 max-w-4xl mx-auto space-y-8 divide-y-2 w-full">
        @foreach ($posts as $post)
            <article class="pt-12">
                <header class="flex flex-col">
                    <h3 class="text-madison text-3xl leading-snug mr-3">
                        <a href="{{ $post->getUrl() }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-sm mb-6 mt-1">
                        <time>{{ date('F j, Y', $post->date) }}</time> •
                    </p>
                </header>
                <p class="text-xl">
                    {{ $post->description }}
                </p>
                <footer class="mt-4">
                    <a class="flex items-center text-xl" href="/posts/2020-in-review/">
                        Read More
                    </a>
                </footer>
            </article>
        @endforeach
    </section>
    <x-newsletter />
@stop
