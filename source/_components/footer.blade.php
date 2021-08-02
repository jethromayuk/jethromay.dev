<footer class="bg-madison flex flex-col text-center text-white py-6" role="contentinfo">
    <div class="flex flex-col items-center justify-center">
        <p class="text-sm mb-1">
            <time>© {{ date('Y') }}</time> • Copyright {{ $page->siteName }}. All rights reserved.
        </p>
    </div>
    <div class="flex items-center justify-center">
        <a href="https://twitter.com/jethromayuk" class="text-sm mr-2 ml-2 hover:text-niagara" target="_blank" rel="noopener noreferrer">Twitter</a>
        <a href="https://github.com/jethromayuk" class="text-sm mr-2 ml-2 hover:text-niagara" target="_blank" rel="noopener noreferrer">GitHub</a>
        <a href="{{ $page->baseUrl.'/rss.xml' }}" class="text-sm mr-2 ml-2 hover:text-niagara">RSS</a>
    </div>
</footer>
