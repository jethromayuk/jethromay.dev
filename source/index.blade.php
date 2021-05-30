@extends('_layouts.main')

@section('body')
    <article class="py-16" itemscope="itemscope" itemtype="http://schema.org/Article">
        <section class="grid grid-cols-2" itemprop="articleSection">
            <div class="relative col-start-1 col-end-2 place-self-center">
                <h2 class="font-bold text-gray-900 text-6xl tracking-tight -ml-1">Hey, I'm Jethro.</h2>
                <p class="font-medium text-2xl my-4">I'm a South African Laravel developer, living and working in South Africa. I love tech, learning and sharing what I know.</p>
            </div>
            <div class="relative col-span-auto place-self-end">
                <img class="rounded-lg shadow-lg max-w-xs" src="/assets/images/me.jpg" alt="Jethro May">
            </div>
        </section>
        @foreach ($posts as $post)
            <li>
                <a href="{{ $post->getUrl() }}">
                    {{ $post->title }}
                </a>
        </li>
        @endforeach
    </article>
@endsection
