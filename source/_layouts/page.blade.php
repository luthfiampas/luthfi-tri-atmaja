@extends('_layouts.blank')

@section('body')
<h1>{{ $page->title }}</h1>

@if ($page->description)
<p>{{ $page->description }}</p>
@endif

@yield('content')
@endsection
