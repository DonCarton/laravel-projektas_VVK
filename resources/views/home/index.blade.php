@extends('layouts.app')

@section('title')
    {{ __('app.home') }}
@endsection
@section('content')
    <div class="jumbotron text-center">
        <h1>{{ __('app.welcome') }}</h1>
    </div>
@endsection
