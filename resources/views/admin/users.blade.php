@extends('layouts.app')

@section('title')
    {{ __('app.userConsole') }}
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
{{--                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.userType') }}</th>--}}
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.email') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.createDate') }}</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">{{ __('app.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($users) > 0)
                                @foreach($users as $user)
                                <tr>
                                <td class="pl-4">{{ $user->id }}</td>
                                <td>
                                    <h5 class="font-medium mb-0">{{ $user->name }}</h5>
{{--                                    <span class="text-muted">Šalis</span>--}}
                                </td>
{{--                                <td>--}}
{{--                                    <span class="text-muted">{{ ucfirst($user['userType']) }}</span><br>--}}
{{--                                </td>--}}
                                <td>
                                    <span class="text-muted">{{ $user->email }}</span><br>
{{--                                    <span class="text-muted">Telefono numeris</span>--}}
                                </td>
                                <td>
                                    <span class="text-muted">{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</span><br>
                                    <span class="text-muted">{{ \Carbon\Carbon::parse($user->created_at)->format('h:i') }}</span>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-1" href="{{ route('admin.users.show', ['id' => $user->id]) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a type="button" class="btn btn-outline-warning btn-circle btn-lg btn-circle ml-1" href="{{ route('admin.users.edit', ['id' => $user->id]) }}"><i class="bi bi-pencil-fill"></i></a>
{{--                                    <form action="{{ route('admin.users.destroy', ['id' => $user->id]) }}" method="post" >--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                        <button type="submit" onclick="return alert('{{__('app.confirmation')}}')" class="btn btn-danger btn-circle btn-lg btn-circle ml-1" ><i class="bi-x-octagon-fill"></i></button>--}}
{{--                                    </form>--}}
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
