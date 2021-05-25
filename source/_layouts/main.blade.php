<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <header class="bg-white border-b-2 fixed shadow-none top-0 z-50 w-full lg:border-0 lg:p-2">
            <div class="flex flex-wrap items-center container mx-auto w-full mt-0 px-4 py-3">
                <div class="flex items-center justify-between">
                    <a href="/" class="flex font-bold text-xl no-underline hover:text-blue-700 hover:no-underline" title="Jethro May">
                        Jethro May
                    </a>
                </div>
                <nav class="flex flex-grow" aria-label="Main">
                    <ul class="flex flex-1 justify-end space-x-6 lg:px-0" role="menubar">
                        <li class="text-base py-1 md:text-lg lg:py-2" role="menuitem">
                            <a href="/blog" class="text-gray-700 hover:text-blue-700 lg:text-lg">Blog</a>
                        </li>
                        <li class="text-base py-1 md:text-lg lg:py-2" role="menuitem">
                            <a href="/snippets" class="text-gray-700 hover:text-blue-700 lg:text-lg">Snippets</a>
                        </li>
                        <li class="text-base py-1 md:text-lg lg:py-2" role="menuitem">
                            <a href="/uses" class="text-gray-700 hover:text-blue-700 lg:text-lg">Uses</a>
                        </li>
                        <li class="text-base py-1 md:text-lg lg:py-2" role="menuitem">
                            <a href="/contact" class="text-gray-700 hover:text-blue-700 lg:text-lg">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            @yield('body')
        </main>
        <footer class="flex-shrink-0 pt-0 pb-10 pr-5 pl-5 xs:text-center sm:text-center" role="contentinfo">
            <div class="flex flex-col items-center justify-center">
                    <p class="text-sm mb-1 text-gray-500">
                        <time class="text-gray-500">© {{ $page->date->format('Y') }}</time> • Copyright Jethro May. All rights reserved.
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
    </body>
</html>
