@extends('layouts.app')

@section('title', 'Create conference')
@section('content')
    <div class="container">
        <h2>{{ __('app.createNew') }}</h2>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="eventName">{{ __('app.eventName') }}</label>
                <input type="text" class="form-control" id="eventName" name="eventName">
            </div>
            <div class="form-group">
                <label for="location">{{ __('app.location') }}</label>
                <input type="text" class="form-control" id="location" name="location"  >
            </div>
            <div class="form-group">
                <label for="info">{{ __('app.info') }}</label>
                <input type="text" class="form-control" id="info" name="info"  >
            </div>
            <div class="form-group">
                <label for="eventDate">{{ __('app.eventDate') }}</label>
                <input type="text" class="form-control" id="eventDate" name="eventDate"  >
            </div>
            <a type="button" class="btn btn-outline-info m-2" onclick="return alert('{{__('app.saved')}}.')" href="{{ route('admin.conferences.index') }}">{{ __('app.submit') }}</a>
        </form>
    </div>
@endsection
