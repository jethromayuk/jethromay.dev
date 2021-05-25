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
    <body class="text-gray-900 font-sans antialiased container mx-auto max-w-screen-lg">
        <header class="py-12">
            <div class="grid grid-cols-2 items-center">
                <a href="/" class="text-xl font-bold hover:text-blue-700" title="Jethro May">
                    Jethro May
                </a>
                <nav aria-label="Main">
                    <ul class="flex items-center justify-end space-x-6 text-lg text-gray-700" role="menubar">
                        <li role="menuitem">
                            <a href="/blog" class="hover:text-blue-700">Blog</a>
                        </li>
                        <li role="menuitem">
                            <a href="/snippets" class="hover:text-blue-700">Snippets</a>
                        </li>
                        <li role="menuitem">
                            <a href="/uses" class="hover:text-blue-700">Uses</a>
                        </li>
                        <li role="menuitem">
                            <a href="/contact" class="hover:text-blue-700">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main id="main" role="main">
            @yield('body')
        </main>
        <footer class="flex-shrink-0 pt-0 pb-10 pr-5 pl-5 text-center" role="contentinfo">
            <div class="flex flex-col items-center justify-center">
                    <p class="text-sm mb-1 text-gray-500">
                        <time class="text-gray-500">© {{ $page->date }}</time> • Copyright Jethro May. All rights reserved.
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
