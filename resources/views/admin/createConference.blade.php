@extends('layouts.app')

@section('title', 'Create conference')
@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h2>{{ __('app.createNew') }}</h2>
        <form action="{{ route('admin.conferences.store') }}" method="POST" >
            <div class="form-group">
                <label for="eventName">{{ __('app.eventName') }}*:</label>
                <input type="text" class="form-control" id="eventName" name="eventName" required>
            </div>
            <div class="form-group">
                <label for="info">{{ __('app.info') }}*:</label>
                <textarea class="form-control" rows="3" id="info" name="info" required></textarea>
            </div>
            <div class="form-group">
                <label for="eventDate">{{ __('app.eventDate') }}*:</label>
                <input type="datetime-local" class="form-control" id="eventDate" name="eventDate" required>
            </div>
            <div class="form-group">
                <label for="location">{{ __('app.location') }}*:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <form action="{{ route('admin.conferences.store') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-info">{{ __('app.submit') }}</button>
                <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.conferences.index') }}">{{ __('app.cancel') }}</a>
            </form>
        </form>
    </div>
@endsection
