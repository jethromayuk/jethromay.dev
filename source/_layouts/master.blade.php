<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <meta name=twitter:url content="{{ $page->getUrl() }}">
        <meta name=twitter:title content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name=twitter:image content="https://jethromay.com/assets/images/me.jpg">
        <meta name=twitter:card content="summary_large_image">
        <meta name=twitter:site content="@may_jethro">

        <meta name="keywords" content="PHP web developer,HTML,CSS,JS,PHP,Laravel,South Africa">

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <x-header :page="$page" />
        <main role="main">
            @yield('body')
        </main>
        <x-footer :page="$page" />
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
