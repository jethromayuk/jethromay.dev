@extends('_layouts.main')

@section('body')
    <article class="py-16" itemscope="itemscope" itemtype="http://schema.org/Article">
        <section class="grid grid-cols-2" itemprop="articleSection">
            <div class="relative col-start-1 col-end-2 place-self-center">
                <h2 class="font-bold text-gray-900 text-6xl tracking-tight -ml-1">Hey, I'm Jethro.</h2>
                <p class="font-medium text-2xl my-4">I'm a South African Laravel developer, living and working in London. I love tech, learning and sharing what I know.</p>
            </div>
            <div class="relative col-span-auto place-self-end">
                <img class="relative rounded-lg shadow-lg max-w-xs z-10" src="/assets/images/me.jpg" alt="Jethro May">
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
