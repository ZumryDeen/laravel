@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <a href='/blog/create'>Add a Post</a>
                            <table class='table table-striped'><tr><th>Title</th><th></th><th></th></tr>
                                @foreach ($blogArr as $post)
                                    <tr><th>{{$post->title}}</th>
                                        <th><a href='/blog/{{$post->id}}/edit'>Edit</a></th>
                                        <th><a href='/blog/{{$post->id}}/edit'>Delete</a></th></tr>
                                @endforeach </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
