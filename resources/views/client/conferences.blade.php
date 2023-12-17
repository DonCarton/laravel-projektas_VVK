@extends('layouts.app')

@section('title')
    {{ __('app.conferenceConsole') }}
@endsection
@section('content')
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
                                    <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.eventDate') }}</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($conferences as $conference)
                                    @if($conference['eventDate'] > \Carbon\Carbon::now()->format('Y-m-d'))
                                    <tr>
                                        <td class="pl-4">{{ $conference['id'] }}</td>
                                        <td>
                                            <h5 class="font-medium mb-0">{{ $conference['eventName'] }}</h5>
                                            <span class="text-muted">{{ $conference['location'] }}</span>
                                        </td>
                                        <td class="text-wrap">
                                            <span class="badge badge-primary badge-pill bg-black">{{ count($conference['registeredUsers']) }}</span><br>
                                        </td>
                                        <td>
                                            <span class="text-muted">{{ $conference['eventDate'] }}</span><br>
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="{{ route('client.show', ['id' => $conference['id']]) }}"><i class="bi bi-eye-fill"></i></a>
                                            <a type="button" class="btn btn-success btn-circle btn-lg btn-circle ml-2" href="{{ route('client.register', ['id' => $conference['id']]) }}"><i class="bi bi-pencil"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h2 class="text-center" style="font-size: large">{{ __('app.dataNotFound') }}</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
