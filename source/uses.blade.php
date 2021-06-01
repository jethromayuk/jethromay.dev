---
title: Uses
description: The list of blog posts for the site
---
@extends('_layouts.main')

@section('body')
<article class="mt-6" itemtype="http://schema.org/Article">
    <header class="mb-3">
        <h1 class="text-5xl font-extrabold">Uses</h1>
    </header>

    <p class="text-lg leading-relaxed">
        Inspired by Wes Bos, Freek Murze and many others I've put together this list of hardware, software and services that I use on a day-to-day basis. I will keep this list updated as my workflow changes.
    </p>

    <h2 class="font-bold text-3xl my-6">Hardware</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">
                <a href="#" class="text-green-500" target="_blank">MacBook Pro (2019), i7, 16GB RAM, 500GB SSD</a>
            </p>
            <p class="leading-normal">This is my every day development machine, its extremely powerful and handles everything with ease.</p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl my-6">Software</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">Visual Studio Code</p>
            <p>I used PHPStorm for many years but after purchasing Caleb Porzio's course, Make VS Code Awesome I made the switch and haven't looked back.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">TablePlus</p>
            <p>Sequel Pro was my go-to database management tool for some time but when I tried out TablePlus I fell in love. It is extremely easy to use, visually appealing and the features are fantastic.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">iTerm 2</p>
            <p>Nothing comes close to iTerm2, it is a personal favourite and one of the first things that get installed when setting up a new machine.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">Tinkerwell</p>
            <p>I predominantly use this app when I need to interact with my databases, this tends to service most of my needs but I still find some use in TablePlus.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">HELO</p>
            <p>I recently started using HELO for email testing and debugging, it makes this usually painful process across a variety of environments extremely easy.</p>
        </li>
        <li class="space-y-2">
            <p class="font-bold leading-normal">Expose</p>
            <p></p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl my-6">Productivity</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li class="space-y-2">
            <p class="font-bold leading-normal">Alfred 4</p>
            <p>
                I only recently started using Alfred and it has been a game-changer, I cannot imagine working without it.
            </p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl my-6">Design</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li  class="space-y-2">
            <p class="font-bold leading-normal">Figma</p>
            <p></p>
        </li>
        <li  class="space-y-2">
            <p class="font-bold leading-normal">Sip</p>
            <p></p>
        </li>
    </ul>

    <h2 class="font-bold text-3xl my-6">Hosting</h2>

    <ul class="list-disc space-y-6 pl-4 text-lg">
        <li  class="space-y-2">
            <p class="font-bold leading-normal">GitHub</p>
            <p></p>
        </li>
        <li  class="space-y-2">
            <p class="font-bold leading-normal">Netlify</p>
            <p></p>
        </li>
        <li  class="space-y-2">
            <p class="font-bold leading-normal">Namecheap</p>
            <p></p>
        </li>
    </ul>
</article>
@stop
