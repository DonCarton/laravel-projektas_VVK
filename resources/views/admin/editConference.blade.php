@extends('layouts.app')

@section('title')
    {{ __('app.edit') }} - {{ $conference['eventName'] }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('app.edit') }} - {{ $conference['eventName'] }}</h2>
                <form action="">
                    <div class="form-control">
                        <label for="eventName">{{ __('app.event_name') }}*:</label>
                        <input type="text" class="form-control" id="eventName" name="eventName" value="{{$conference['eventName']}}" required>
                        <label for="info">{{ __('app.info') }}*:</label>
                        <textarea class="form-control" id="info" rows="3" required>{{$conference['info']}}</textarea>
                        <label for="eventDate">{{ __('app.eventDate') }}*:</label>
                        <input type="date" class="form-control" id="eventDate" name="eventDate" value="{{$conference['eventDate']}}" required>
                        <label for="location">{{ __('app.location') }}*:</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$conference['location']}}" required>
                        <div class="m-2">
                            <a type="button" class="btn btn-outline-info" onclick="return alert('{{__('app.saved')}}.')" href="{{ route('admin.conferences.index') }}">{{ __('app.submit') }}</a>
                            <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.conferences.index') }}">{{ __('app.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
