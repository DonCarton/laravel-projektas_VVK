@extends('layouts.app')

@section('title')
    {{ __('app.conferenceConsole') }}
@endsection
@section('content')
    @if (session('successDelete'))
        <div class="alert alert-warning text-center">
            {{ session('successDelete') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @elseif(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="card-title text-uppercase mb-0">{{ __('app.conferenceConsole') }}</h1>
                </div>
                @if(count($conferences) > 0)
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">ID</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.eventName') }}</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.eventUserCount') }}</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.createDate') }}</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.eventDate') }}</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($conferences as $conference)
                                <tr>
                                    <td class="pl-4">{{ $conference->id }}</td>
                                    <td>
                                        <h5 class="font-medium mb-0">{{ $conference->eventName }}</h5>
                                        <span class="text-muted">{{ $conference->location }}</span>
                                    </td>
                                    <td class="text-wrap">
                                        <span class="badge badge-primary badge-pill bg-black">{{ $conference->users->count() }}</span><br>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{ $conference->created_at }}</span><br>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{ \Carbon\Carbon::parse($conference->eventDate)->format('Y-m-d H:i') }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.conferences.destroy', ['id' => $conference->id]) }}" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <a type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="{{ route('admin.conferences.show', ['id' => $conference->id]) }}"><i class="bi bi-eye-fill"></i></a>
                                            <a type="button" class="btn btn-outline-warning btn-circle btn-lg btn-circle ml-2" href="{{ route('admin.conferences.edit', ['id' => $conference->id]) }}"><i class="bi bi-pencil-fill"></i></a>
                                            <button type="submit" onclick="return alert('{{__('app.confirmation')}}')" class="btn btn-danger btn-circle btn-lg btn-circle ml-1" ><i class="bi-x-octagon-fill"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <h2 class="text-center" style="font-size: large">{{ __('app.dataNotFound') }}</h2>
                @endif

                <div>
                    <a type="button" class="btn btn-outline-success btn-circle btn-lg btn-circle ml-2 m-2" href="{{ route('admin.conferences.create')}} ">{{ __('app.createNew') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
