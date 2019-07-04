@extends('layouts.app')
@section('content')

<div class="container"></div>


    <h1>single Post</h1>

   {{--@foreach($postdataArr as $postdata)
       <h2>  ID : {{$postdata->id }} </h2>
       <h2>  title : {{ $postdata->title }} </h2>
       <h2>  Description  : {{ $postdata->desc }} </h2>
       <br>
       <h3>Edit <a href='posts/edit/{{ $postdata->id  }}'>Edit</a> </h3>

       <hr>
       @endforeach--}}




    <h3>Title : {{$posts->title}}</h3>
    <h3>Content : {{$posts->content}}</h3>

    <br>
@if(!Auth::guest())
@if( Auth::user()->id==$posts->id)
    <h3> <a href='/blog/{{ $posts->id }}/edit'>Edit</a> </h3>

<form action="/blog/{{$posts->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
<input type="hidden" name="_method" value="DELETE">
    <input type="submit"
           value="DELETE">
</form>
@endif
@endif


    <hr>




    @endsection
