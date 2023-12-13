@extends('layouts.app')

@section('title', 'Edit user')
@section('content')
    <div class="container">
        <h2>Edit {{ $user['lastName'] }}, {{ $user['firstName'] }}</h2>
        <form action="/users">
            <div class="form-group">
                <label for="firstName">First name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$user['firstName']}}" required >
            </div>
            <div class="form-group">
                <label for="lastName">Last name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$user['lastName']}}" required >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user['email']}}" required >
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
@endsection
