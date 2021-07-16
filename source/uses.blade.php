---
title: Uses
description: The list of blog posts for the site
---
@extends('_layouts.main')

@section('body')
<article class="py-24 max-w-4xl mx-auto w-full" itemtype="http://schema.org/Article">
    <header class="mb-3">
        <h1 class="font-extrabold text-madison text-5xl">Uses</h1>
    </header>

    <p class="text-lg leading-relaxed">
        Inspired by Wes Bos, Freek Murze and many others I've put together this list of hardware, software and services that I use on a day-to-day basis. I will keep this list updated as my workflow changes.
    </p>

    <h2 class="font-bold text-3xl text-madison my-6">Hardware</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://www.apple.com/uk/macbook-pro" class="text-green-500 underline" target="_blank">MacBook Pro (2019), i7, 16GB RAM, 500GB SSD</a>
            </p>
            <p class="leading-normal">This is my every day development machine that I use for both work and personal projects.</p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl text-madison my-6">Software</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://code.visualstudio.com" class="text-green-500 underline" target="_blank">
                Visual Studio Code
                </a>
            </p>
            <p>
                I was previously a long-time PHPStorm user, however due to developing in multiple languages I needed a multi-purpose code editor. I am also continually blown away at how great the extension ecosystem is.
            </p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://tableplus.com" class="text-green-500 underline" target="_blank">
                    TablePlus
                </a>
            </p>
            <p>Sequel Pro was my go-to database management tool for some time, however development slowed down and I needed a stable database client. TablePlus also supports multiple drivers such as Redis & SQLite, to name a few.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://iterm2.com" class="text-green-500 underline" target="_blank">
                    iTerm 2
                </a>
            </p>
            <p>Easy to use, fast and it can be customised to fit anyones needs.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://tinkerwell.app" class="text-green-500 underline" target="_blank">
                    Tinkerwell
                </a>
            </p>
            <p>This application has become an integral part of my every-day development. It allows me to easily save and share code snippets, as well as connect to servers via SSH.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://usehelo.com" class="text-green-500 underline" target="_blank">
                    HELO
                </a>
            </p>
            <p>
                I used Mailtrap for years, switched to HELO and haven't looked back. It allows me to test and debug email issues very easily.
            </p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://expose.dev" class="text-green-500 underline" target="_blank">
                    Expose
                </a>
            </p>
            <p>
                This is a recent addition to my toolbelt, which replaced Laravel Valet's share functionality. Its easy to use and best of all it's free.
            </p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl text-madison my-6">Productivity</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://www.alfredapp.com" class="text-green-500 underline" target="_blank">
                    Alfred 4
                </a>
            </p>
            <p>
                When I first heard of Alfred, I wasn't sure that I needed it. After using it for some time, I realised how great it actually is. I have many custom workflows that are core to my development process.
            </p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://www.expressvpn.com" class="text-green-500 underline" target="_blank">
                    ExpressVPN
                </a>
            </p>
            <p>
                I always have this running on my laptop and my phone. I don't have any issues with it, its fast and reliable.
            </p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://improvmx.com" class="text-green-500 underline" target="_blank">
                    ImprovMX
                </a>
            </p>
            <p>
                I use this service to easily create forwarding emails, it also allows me to hide my real email address which is quite handy.
            </p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl text-madison my-6">Design</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li  class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://sipapp.io" class="text-green-500 underline" target="_blank">
                    Sip
                </a>
            </p>
            <p>
                An easy to use color picker, that works across apps and websites.
            </p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl text-madison my-6">Hosting</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li  class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://github.com" class="text-green-500 underline" target="_blank">
                    GitHub
                </a>
            </p>
            <p>
                All of my code is stored on GitHub, I previously used GitLab, BitBucket and found they both had their issues. GitHub is easy to use and is the industry standard platform for open source projects.
            </p>
        </li>
        <li  class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://netlify.com" class="text-green-500 underline" target="_blank">
                    Netlify
                </a>
            </p>
            <p>
                I host all of my static projects on Netlify, including this website. It also integrates with GitHub and allows for ridiculously easy deployments.
            </p>
        </li>
        <li  class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="https://namecheap.com" class="text-green-500 underline" target="_blank">
                    Namecheap
                </a>
            </p>
            <p>
                All of my domains are registered via Namecheap.
            </p>
        </li>
    </ul>
</article>
@stop
