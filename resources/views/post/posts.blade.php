@extends('layouts.app')
@section('content')






   {{--@foreach($postdataArr as $postdata)
       <h2>  ID : {{$postdata->id }} </h2>
       <h2>  title : {{ $postdata->title }} </h2>
       <h2>  Description  : {{ $postdata->desc }} </h2>
       <br>
       <h3>Edit <a href='posts/edit/{{ $postdata->id  }}'>Edit</a> </h3>

       <hr>
       @endforeach--}}

<h1>Home page </h1>

   @if(Session::has('info'))
<div class='row'>
    <div class='col-md-12'>
        <p class = 'alert alert-info'>{{ Session::get('info', 'default') }}</p>
    </div>
</div>
@endif

@foreach($postsArray as $postdata)


    <h2>  title : {{$postdata->title }} </h2>
    <h2>   Content : {{ $postdata->content }} </h2>
    <p><small> Written on : {{ $postdata->created_at }} By : {{ $postdata->name }} </small></p>

    <br>

    <h4><a href='/blog/{{$postdata->id}}'>Read More</a> </h4>

    <hr>
@endforeach


    <h3>Add <a href='posts/create/'>Add Post</a> </h3>
    @endsection
