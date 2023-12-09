@extends('layouts.app')

@section('title', 'Posts list')

@section('content')
    @foreach($posts as $post)
        <h4>{{$post[]}}</h4>
        <p></p>
    @endforeach
@endsection
