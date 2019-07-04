@extends('layouts.app')
@section('content')


    <h1>Add New Post</h1>


@if(count($errors->all())>0)

    {{--{{ print_r($errors->all()) }}--}}
    <div class="alert alert-danger">

        <ul>
            @foreach($errors->all() as $error)

            <li>  {{ $error }}</li>

            @endforeach
        </ul>


    </div>
    @endif

    <form action="/blog" method="POST">
        {{ csrf_field() }}

        <div> id      : <input type="text" name="id"/></div>
        <div> Title   : <input type="text" name="title"/></div>
        <div> Description    : <input type="text" name="content"/></div>
        <div> <input type="submit"/></div>


    </form>



@endsection
