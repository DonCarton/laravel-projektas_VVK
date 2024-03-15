@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel 10 Simple Search With Like Operator - Laravelia</div>
                    <div class="card-body">
                        <form action="{{ route('posts.index') }}" method="get">
                            <div class="row">
                                <div class="col-md-10">
                                    <input id="q" type="text" class="form-control mb-3" placeholder="search" name="q" value="{{ old('q') }}">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" class="form-control mb-3" value="Search">
                                </div>
                            </div>
                        </form>
                        <table style="width: 100%">
                            <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center class="mt-5">
                            {{  $posts->withQueryString()->links() }}
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
