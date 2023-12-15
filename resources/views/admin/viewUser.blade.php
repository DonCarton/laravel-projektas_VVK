@extends('layouts.app')

@section('title')
    {{ __('app.view') }} - {{ $user['lastName'] }}, {{ $user['firstName'] }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('app.view') }} - {{ $user['lastName'] }}, {{ $user['firstName'] }}</h2>
                <form action="">
                    <div class="form-control">
                        <label for="firstName">{{ __('app.firstName') }}:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{$user['firstName']}}" disabled>
                        <label for="lastName">{{ __('app.surname') }}:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{$user['lastName']}}" disabled>
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
