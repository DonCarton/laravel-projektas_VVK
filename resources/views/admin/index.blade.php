@extends('layouts.app')

@section('title')
    {{ __('app.adminPanel') }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mb-4 text-center mt-5">{{ __('app.adminPanel') }}</h1>
            <div class="col-sm-6 text-center">
                <a class="btn btn-info btn-block btn-lg" style="font-size: 30px" href="{{ route('admin.users.index') }}">{{ __('app.userConsole')}}</a>
            </div>
            <div class="col-sm-6 text-center">
                <a class="btn btn-info btn-block btn-lg" style="font-size: 30px" href="{{ route('admin.conferences.index') }}">{{ __('app.conferenceConsole')}}</a>
            </div>
        </div>
    </div>
@endsection
