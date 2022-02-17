---
title: Portfolio
description: Browse my portfolio for examples of my work. I am constantly creating new projects, and will be updating this page on a regular basis.
---

@extends('_layouts.page')

@section('content')
@php
$items = [
    'Bufdio' => [
        'desc' => 'A cross-platform audio playback library that targets .NET Standard 2.1. The main purpose of this project is to provides easy to use API for playing and streaming audio especially in a desktop environment.',
        'link' => 'https://github.com/luthfiampas/Bufdio',
        'tags' => ['.NET', 'FFmpeg', 'PortAudio']
    ],
    'TLDrop' => [
        'desc' => 'High-performance desktop application for SEO enthusiast. It finds expired domains, dropped domains, expired Web 2.0 or even expired articles with only a few mouse clicks.',
        'link' => 'https://tldrop.lutpy.com',
        'tags' => ['C', '.NET', 'WPF', 'SQLite']
    ],
    'Putra Sikunir' => [
        'desc' => 'A static site made with <a href="https://jigsaw.tighten.co" target="_blank">Laravel Jigsaw</a>, built for a start-up organization in Indonesia that serves lodging and tourism service. Fast, easy to navigate and highly SEO optimized.',
        'link' => 'https://putrasikunir.com',
        'tags' => ['PHP', 'HTML', 'Sass', 'JavaScript']
    ],
    'IzwellLM' => [
        'desc' => 'This project contains license server and license manager for Izwell products. It provides serial key generation and validation service based on user\'s hardware id.',
        'link' => 'https://www.youtube.com/watch?v=Zgoa_5jBMBQ',
        'tags' => ['PHP', '.NET', 'WPF', 'MySQL']
    ],
    'IzwellIndexer' => [
        'desc' => 'Automate backlink-building processes, this software will automatically submit URLs to Google and Bing Webmaster to speed-up search engine indexing.',
        'link' => 'https://www.youtube.com/playlist?list=PLCUeVH3f6kdgYaD5rQDxYw8_CgK5RFcpR',
        'tags' => ['.NET', 'WPF']
    ],
    'HatchBack' => [
        'desc' => 'A desktop software that automatically generates unique, yet eye-catching video from an article with realistic text-to-speech options. Useful for marketing and product promotion.',
        'link' => 'https://www.youtube.com/watch?v=lA8DczPd0Jc',
        'tags' => ['.NET', 'WPF', 'C', 'FFmpeg']
    ],
    'Vikata' => [
        'desc' => 'Blazing-fast low competition YouTube keyword finder that runs on Windows, macOS and Linux. This is the software that finds the right keywords for your videos!',
        'link' => 'https://www.youtube.com/watch?v=5V24bRV13RI',
        'tags' => ['.NET', 'Avalonia']
    ],
    'BlogGo' => [
        'desc' => 'A tool that generates articles from specified queries and sends the result to Blogger and WordPress sites. It uses the same algorithm that is being used in Firefox Reader View.',
        'link' => 'https://www.youtube.com/watch?v=kbt6pTQLeeM',
        'tags' => ['.NET', 'WPF']
    ],
    'Mesell' => [
        'desc' => 'A simple but powerful Windows software to manage multiple Indonesian online shop accounts. This software was intended to ease dropshipping tasks.',
        'link' => 'https://i.ibb.co/jh2bdnN/mesell.jpg',
        'tags' => ['.NET', 'WPF']
    ],
    'AutoTelegram' => [
        'desc' => 'Telegram automation bot for Windows. It includes user scraper, automatic group invite and spam guard service that protects a Telegram group from spamming.',
        'link' => 'https://i.ibb.co/LhqRJ41/autotelegram.png',
        'tags' => ['.NET', 'WPF', 'C++']
    ],
    'BVT' => [
        'desc' => 'Extremely lightweight desktop tool that increases number of views in a Telegram message. It includes internal proxy collector service to retrive fresh public proxies.',
        'link' => 'https://www.youtube.com/watch?v=xMTk0FvllqU',
        'tags' => ['.NET', 'WPF']
    ],
    'Rapig' => [
        'desc' => 'Instagram marketing software that runs on Windows platform. A tool that allows users to implement their marketing strategy with unlimited possibilities.',
        'link' => 'https://www.youtube.com/playlist?list=PLKr2ZfHpFAiykHfF5xB8zODU1JSeYD7yG',
        'tags' => ['.NET', 'WinForms']
    ],
    'Sikako' => [
        'desc' => 'IMDb scraper and CPA tool that performs auto-post job into various web 2.0 platforms including Blogger, WordPress, Overblog and Tumblr with flexible templating system.',
        'link' => 'https://www.youtube.com/watch?v=IlErmamcuSQ',
        'tags' => ['.NET', 'WPF']
    ]
]
@endphp

<ul class="portfolio-items">
    @foreach ($items as $key => $item)
    <li class="portfolio-item">
        <h2><a href="{{ $item['link'] }}" target="_blank">{{ $key }}</a></h2>
        <p class="portfolio-item-description">{!! $item['desc'] !!}</p>
        <div>
            @foreach ($item['tags'] as $tag)
            <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>
    </li>
    @endforeach
</ul>
@endsection
