@extends('layouts.app')

@section('title')
    {{ __('app.view') }} - {{ $user['name'] }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('app.view') }} - {{ $user['name'] }}</h2>
                <form action="">
                    <div class="form-control">
                        <label for="name">{{ __('app.name') }}:</label>
                        <input type="text" class="form-control" id="name" name="username" value="{{$user['name']}}" disabled>
                        <label for="username">{{ __('app.username') }}:</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$user['username']}}" disabled>
                        <label for="email">{{ __('app.email') }}:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user['email']}}" disabled>
                        <div class="m-2">
                            <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.users.index') }}">{{ __('app.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
