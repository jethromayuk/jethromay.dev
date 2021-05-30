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

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body class="text-gray-900 font-sans antialiased container mx-auto max-w-screen-lg">
        <header class="py-12 px-6">
            <div class="grid grid-cols-2">
                <h1>
                    <a href="/" class="text-xl font-bold hover:text-green-500" title="Jethro May">
                        Jethro May
                    </a>
                </h1>

                <nav class="hidden lg:inline-block" aria-label="Main">
                    <ul class="flex items-center justify-end space-x-6 text-lg text-gray-700" role="menubar">
                        <li role="menuitem">
                            <a href="/blog" class="hover:text-green-500">Blog</a>
                        </li>
                        <li role="menuitem">
                            <a href="/uses" class="hover:text-green-500">Uses</a>
                        </li>
                        <li role="menuitem">
                            <a href="/contact" class="hover:text-green-500">Contact</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-green-500">
                                <svg class="fill-current w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-green-500">
                                <svg class="fill-current w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="ml-auto lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                    </svg>
                </button>
            </div>
        </header>
        <main id="main" class="px-6" role="main">
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
