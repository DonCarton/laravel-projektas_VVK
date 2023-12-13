@extends('layouts.app')

@section('title', 'Create conference')
@section('content')
    <div class="container">
        <h2>{{ __('app.createNew') }}</h2>
        <form method="POST" action="/conferences">
            @csrf
            <div class="form-group">
                <label for="eventName">{{ __('app.eventName') }}</label>
                <input type="text" class="form-control" id="eventName" name="eventName" required >
            </div>
            <div class="form-group">
                <label for="location">{{ __('app.location') }}</label>
                <input type="text" class="form-control" id="location" name="location" required >
            </div>
            <div class="form-group">
                <label for="info">{{ __('app.info') }}</label>
                <input type="email" class="form-control" id="info" name="info" required >
            </div>
            <div class="form-group">
                <label for="eventDate">{{ __('app.eventDate') }}</label>
                <input type="email" class="form-control" id="eventDate" name="eventDate" required >
            </div>
            <a type="button" class="btn btn-primary btn-block m-2 mb-3" href="{{ route('admin.conferences.store') }}">{{ __('app.conferenceConsole')}}</a>
            <button type="submit" class="btn btn-outline-info m-2">Submit</button>
        </form>
    </div>
@endsection
