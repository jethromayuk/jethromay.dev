@extends('_layouts.main')

@section('body')
    <article class="lg:py-16" itemscope="itemscope" itemtype="http://schema.org/Article">
        <section class="grid grid-rows-2 lg:grid-cols-2 lg:grid-rows-none" itemprop="articleSection">
            <div class="relative row-start-2 place-self-center lg:col-start-1 lg:col-end-2 lg:row-start-auto">
                <h2 class="font-bold text-green-500 text-5xl tracking-tight -ml-1 lg:text-6xl">Hey, I'm Jethro.</h2>
                <p class="font-medium text-xl my-4 lg:text-2xl">I'm a South African Laravel developer, living and working in South Africa. I love tech, learning and <a href="#" class="font-semibold text-green-500 underline">sharing what I know</a>.</p>
                <p class="font-medium text-xl my-4 lg:text-2xl">I currently work for <a href="#" target="_blank" class="font-semibold text-green-500 underline">Minttwist</a>, a full-service digital agency in London.</p>
            </div>
            <div class="row-start-1 lg:block lg:col-span-auto lg:place-self-end lg:row-start-auto">
                <img class="relative rounded-lg shadow-lg z-10 lg:max-w-xs" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </section>
        <section class="py-12">
            @foreach ($posts as $post)
                <article>
                    <header class="flex flex-col">
                        <h3 class="text-4xl leading-snug mr-3">
                            <a href="{{ $post->getUrl() }}">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-sm text-gray-600 mb-6 mt-1">
                            <time>{{ date('F j, Y', $post->date) }}</time> •
                        </p>
                    </header>
                    <p class="text-xl">
                        {{ $post->description }}
                    </p>
                    <footer class="mt-4">
                        <a class="flex items-center text-xl text-green-500" href="/posts/2020-in-review/">
                            Read More
                        </a>
                    </footer>
                </article>
            @endforeach
        </section>
    </article>
@stop
