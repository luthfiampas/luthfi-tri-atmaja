<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Luthfi Tri Atmaja" />
    <meta property="og:locale" content="en_US" />

    @if ($page->description)
    <meta name="description" content="{{ $page->description }}">
    <meta property="og:description" content="{{ $page->description }}" />
    @endif

    @if ($page->getPath())
    <title>{{ $page->title }} - Luthfi Tri Atmaja</title>
    <meta property="og:title" content="{{ $page->title }} - Luthfi Tri Atmaja" />
    @else
    <title>{{ $page->title }}</title>
    <meta property="og:title" content="{{ $page->title }}" />
    @endif

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="icon" href="/assets/images/icon.png">

    @yield('head')
</head>

<body>
    <div class="site-container">
        <header class="site-header">
            <div class="site-title">
                <a href="{{ $page->baseUrl ? $page->baseUrl : '/' }}" class="site-title-link">Luthfi Tri Atmaja</a>
            </div>
            <nav class="site-nav">
                <ul class="site-nav-items">
                    <li class="site-nav-item">
                        <a class="{{ $page->getSiteNavLinkClass('/portfolio') }}" href="/portfolio">Works</a>
                    </li>
                    <li class="site-nav-item">
                        <a class="{{ $page->getSiteNavLinkClass('/articles') }}" href="/articles">Articles</a>
                    </li>
                    <li class="site-nav-item">
                        <a class="site-nav-link" href="https://github.com/luthfiampas" target="_blank">GitHub</a>
                    </li>
                    <li class="site-nav-item">
                        <a class="site-nav-link" href="https://linkedin.com/in/luthfiampas" target="_blank">LinkedIn</a>
                    </li>
                    <li class="site-nav-item">
                        <a class="site-nav-link" href="https://twitter.com/luthfiampas" target="_blank">Twitter</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="site-main">
            @yield('body')
        </main>
        <footer class="site-footer">
            <span class="site-copyright">Copyright © {{ date('Y') }} <a href="{{ $page->baseUrl ? $page->baseUrl : '/' }}">Luthfi Tri Atmaja</a></span>
        </footer>
    </div>
</body>

</html>
