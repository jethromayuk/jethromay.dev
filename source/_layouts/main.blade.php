<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        {{-- <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed"> --}}

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="text-gray-900 font-sans antialiased container mx-auto max-w-screen-lg">
        <header class="py-12 px-6">
            <div class="grid grid-cols-2">
                <h1>
                    <a href="/" class="text-xl font-bold hover:text-green-500" title="{{ $page->siteName }}">
                        {{ $page->siteName }}
                    </a>
                </h1>
                <x-menu />
            </div>
        </header>
        <main role="main" class="px-6">
            @yield('body')
        </main>
        <footer class="flex-shrink-0 pt-0 pb-10 pr-5 pl-5 text-center" role="contentinfo">
            <div class="flex flex-col items-center justify-center">
                    <p class="text-sm mb-1 text-gray-500">
                        <time class="text-gray-500">© {{ $page->date }}</time> • Copyright {{ $page->siteName }}. All rights reserved.
                    </p>
            </div>
            <div class="flex items-center justify-center">
                <a href="https://twitter.com/jethromay91" class="text-sm text-gray-500 mr-2 ml-2 hover:text-blue-700" target="_blank" rel="noopener noreferrer">Twitter</a>
                <a href="https://github.com/jethromay" class="text-sm text-gray-500 mr-2 ml-2 hover:text-blue-700" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="https://dev.to/jethromay" class="text-sm text-gray-500 mr-2 ml-2 hover:text-blue-700" target="_blank" rel="noopener noreferrer">Dev.to</a>
                <a href="https://ko-fi.com/jethromay" class="text-sm text-gray-500 mr-2 ml-2 hover:text-blue-700" target="_blank" rel="noopener noreferrer">Ko-Fi</a>
                <a href="https://jethromay.com/posts/index.xml" class="text-sm text-gray-500 mr-2 ml-2 hover:text-blue-700">RSS</a>
            </div>
        </footer>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
