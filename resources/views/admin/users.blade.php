@extends('layouts.app')

@section('title', 'Users')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title text-uppercase mb-0">{{ __('app.userConsole') }}</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">{{ __('app.userId') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.name') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.userType') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.email') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.createDate') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($users) > 0)
                                @foreach($users as $user)
                                <tr>
                                <td class="pl-4">{{ $user['id'] }}</td>
                                <td>
                                    <h5 class="font-medium mb-0">{{ $user['firstName'] }}, {{ $user['lastName'] }}</h5>
                                    <span class="text-muted">Šalis</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{ ucfirst($user['userType']) }}</span><br>
                                </td>
                                <td>
                                    <span class="text-muted">{{ $user['email'] }}</span><br>
                                    <span class="text-muted">Telefono numeris</span>
                                </td>
                                <td>
                                    <span class="text-muted">23 Dec 1997</span><br>
                                    <span class="text-muted">10: 00 AM</span>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="{{ route('admin.users.edit', ['id' => $user['id']]) }}"><i class="bi bi-pencil-fill"></i></a>
                                    <a type="button" class="btn btn-danger btn-circle btn-lg btn-circle ml-2" href="{{ route('admin.users.edit', ['id' => $user['id']]) }}"><i class="bi-x-octagon-fill"></i> </a>
                                </td>
                                </tr>
                              @endforeach
                            @else
                                <tr>{{ __('app.data_not_found') }}</tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
