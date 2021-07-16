@extends('_layouts.main')

@section('body')
    <section class="bg-madison flex sm:h-full sm:px-6 lg:py-32" style="min-height: calc(100vh - 124px)">
        <div class="flex flex-col-reverse mx-auto max-w-7xl sm:px-6 lg:px-0 lg:flex-row lg:flex-grow lg:justify-between">
            <div class="px-6 lg:pr-36">
                <h1 class="font-extrabold text-green-500 text-5xl tracking-tight -ml-1 lg:text-6xl">Hey, I'm Jethro.</h1>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I'm a Web Developer at <a href="https://www.minttwist.com/" target="_blank" class="font-semibold text-green-500 underline">Minttwist</a>, where I primarily work with Laravel and WordPress building bespoke systems and websites.</p>
                <p class="font-medium text-white text-xl my-4 lg:text-2xl">I have 8 years of experience across a wide variety of languages and technologies with my current tech stack being Laravel, Livewire, AlpineJS and Tailwind.</p>
                <p class="font-medium text-white text-xl mt-4 mb-10 lg:text-2xl">When I'm not writing code, you'll find me spending time with my wife, friends and family.</p>
                <div class="flex items-center w-full space-x-4">
                    <a href="#articles" class="bg-transparent border border-white flex items-center rounded-md px-3 py-3 text-white text-xl hover:bg-white hover:text-madison">
                        Latest posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="px-6">
                <img class="relative rounded-lg shadow-lg z-10 sm:px-6 lg:max-w-md" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </div>
    </section>
    <section id="articles" class="bg-white pt-12 pb-24 px-6 max-w-4xl mx-auto space-y-8 divide-y-2 w-full">
        @foreach ($posts as $post)
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
