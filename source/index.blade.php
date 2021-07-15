@extends('_layouts.main')

@section('body')
    <section class="bg-madison min-h-screen" itemprop="articleSection">
        <div class="flex items-center justify-center max-w-6xl mx-auto w-full">
            <div class="relative row-start-2 place-self-center lg:col-start-1 lg:col-end-2 lg:row-start-auto">
                <h1 class="font-extrabold text-green-500 text-5xl tracking-tight -ml-1 lg:text-6xl">Hey, I'm Jethro.</h1>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I'm a South African Laravel developer, living and working in South Africa. I love tech, learning and <a href="#" class="font-semibold text-green-500 underline">sharing what I know</a>.</p>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I currently work for <a href="#" target="_blank" class="font-semibold text-green-500 underline">Minttwist</a>, a full-service digital agency in London.</p>
            </div>
            <div class="row-start-1 lg:block lg:col-span-auto lg:place-self-end lg:row-start-auto">
                <img class="relative rounded-lg shadow-lg z-10 lg:max-w-xs" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </div>
    </section>
    <section class="bg-white py-12 space-y-12">
        @foreach ($posts as $post)
            <article>
                <header class="flex flex-col">
                    <h3 class="text-white text-3xl leading-snug mr-3">
                        <a href="{{ $post->getUrl() }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-sm text-white mb-6 mt-1">
                        <time>{{ date('F j, Y', $post->date) }}</time> •
                    </p>
                </header>
                <p class="text-xl text-white">
                    {{ $post->description }}
                </p>
                <footer class="mt-4">
                    <a class="flex items-center text-xl text-white" href="/posts/2020-in-review/">
                        Read More
                    </a>
                </footer>
            </article>
        @endforeach
    </section>
    <section class="bg-niagara py-12">
        <div class="max-w-6xl mx-auto w-full">
            <h2 class="text-4xl text-white text-center">
                Join My Mailing List
            </h2>
        </div>
    </section>
@stop
