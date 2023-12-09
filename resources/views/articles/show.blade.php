@extends('layouts.app')

@section('title', 'Article show')
@section('content')
{{--    @php--}}
{{--        $html = '<h1>My text here</h1>';--}}
{{--    @endphp--}}
{{--    {!! $html !!}--}}
{{--    <h4>{{ $article['title'] }}</h4>--}}
{{--    <p>{{ $article['content'] }}</p>--}}
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['content'] }}</p>
@endsection
