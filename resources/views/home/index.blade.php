@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to {{ config('app.name', 'Laravel') }} home page.</h1>
    </div>
@endsection
