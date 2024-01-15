@extends('layouts.app')

@section('title')
    {{ __('app.edit') }} - {{ $user['name'] }}
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('app.edit') }} - {{ $user['name'] }}</h2>
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    <div class="form-control">
                        <label for="name">{{ __('app.name') }}:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user['name']}}" required >
                        <label for="username">{{ __('app.username') }}:</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$user['username']}}" required >
                        <label for="email">{{ __('app.email') }}:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user['email']}}" required >
                        <div class="m-2">
                            <form action="{{ route('admin.users.update', ['id' => $user->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-outline-info">{{ __('app.submit') }}</button>
                            </form>
                            <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.users.index') }}">{{ __('app.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
