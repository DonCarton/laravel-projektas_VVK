@extends('layouts.app')

@section('title')
    {{ __('app.edit') }} - {{ $conference['eventName'] }}
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
                <h2>{{ __('app.edit') }} - {{ $conference['eventName'] }}</h2>
                <form action="{{ route('admin.conferences.update', $conference->id) }}" method="POST">
                    <div class="form-control">
                        <label for="eventName">{{ __('app.event_name') }}*:</label>
                        <input type="text" class="form-control" id="eventName" name="eventName" value="{{$conference['eventName']}}" required>
                        <label for="info">{{ __('app.info') }}*:</label>
                        <textarea class="form-control" id="info" rows="3" required>{{$conference['info']}}</textarea>
                        <label for="eventDate">{{ __('app.eventDate') }}*:</label>
                        <input type="datetime-local" class="form-control" id="eventDate" name="eventDate" value="{{ $conference['eventDate'] }}" required>
                        <label for="location">{{ __('app.location') }}*:</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$conference['location']}}" required>
                        <div class="m-2">
                            <form action="{{ route('admin.conferences.update', ['id' => $conference->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-outline-info">{{ __('app.submit') }}</button>
                            </form>
                            <a type="button" class="btn btn-outline-secondary" href="{{ route('admin.conferences.index') }}">{{ __('app.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
