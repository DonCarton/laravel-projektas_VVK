@extends('layouts.app')

@section('title', 'Admin index')
@section('content')
    <div class="container text-center mt-5">
        <h1 class="mb-4">{{ __('app.adminPanel') }}</h1>
        <br><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a class="btn btn-primary btn-block mb-3" href="{{ route('admin.users.index') }}">{{ __('app.userConsole')}}</a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary btn-block mb-3" href="{{ route('admin.conferences.index') }}">{{ __('app.conferenceConsole')}}</a>
            </div>
        </div>
    </div>
@endsection
