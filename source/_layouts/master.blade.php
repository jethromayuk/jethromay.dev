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
            <script src="https://cdn.splitbee.io/sb.js" defer></script>
        @endif

        <meta name="monetization" content="$ilp.uphold.com/kHR3Z9ULUw2p">

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/icons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/icons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/icons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/icons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/icons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="/img/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/img/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/img/favicon-128.png" sizes="128x128" />

        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="/assets/images/icons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="/assets/images/icons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="/assets/images/icons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="/assets/images/icons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="/assets/images/icons/mstile-310x310.png" />
        <meta name="p:domain_verify" content="6eae6b0d19fa67ad308a2195191cfb44"/>

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
