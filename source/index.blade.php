@extends('_layouts.master')

@section('body')
    <section class="bg-madison flex sm:h-full pb-12 sm:px-6 lg:py-32" style="min-height: calc(100vh - 124px)">
        <div class="flex flex-col-reverse mx-auto max-w-7xl sm:px-6 lg:px-0 lg:flex-row lg:flex-grow lg:justify-between">
            <div class="flex-1 px-6 lg:pl-0 lg:pr-6">
                <h1 class="font-extrabold text-niagara text-5xl tracking-tight -ml-1 lg:text-6xl">Hey, I'm Jethro.</h1>
                <p class="font-medium text-white text-lg my-4 md:text-xl">I'm a Web Developer at <a href="https://www.minttwist.com/" target="_blank" class="font-semibold text-green-500 underline">Minttwist</a>, where I primarily work with Laravel and WordPress building bespoke systems and websites.</p>
                <p class="font-medium text-white text-lg my-4 md:text-xl">I have 8 years of experience across a wide variety of languages and technologies with my current tech stack being Laravel, Livewire, AlpineJS and Tailwind.</p>
                <p class="font-medium text-white text-lg mt-4 mb-10 md:text-xl">When I'm not writing code, you'll find me spending time with my wife, friends and family.</p>
                <div class="flex items-center w-full space-x-4">
                    <a href="#posts" class="bg-transparent border border-white flex items-center rounded-md px-3 py-3 text-white text-xl hover:bg-white hover:text-madison">
                        Latest posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex-1 px-6 mb-6 md:mb-6 lg:px-0">
                <img class="relative rounded-lg shadow-lg max-w-sm w-full mx-auto lg:m-0 lg:max-w-auto lg:ml-auto" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </div>
    </section>
    <section id="posts" class="bg-white pb-24 pt-16 px-6 max-w-4xl mx-auto space-y-8 divide-y-2 w-full">
        <h2 class="text-4xl font-extrabold text-madison mb-3 lg:text-5xl">
            Latest posts
        </h2>
        @foreach ($posts->take(3) as $post)
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
    </section>
    <x-newsletter />
@stop
