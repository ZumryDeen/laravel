@extends('layouts.app')
@section('home_main_content')

    <h1>Welcome {{ $name }}  </h1>

    @if(count($status)>0)

        <h2>Records avilable</h2>
        <h2> status : {{ $status[0]  }}</h2>
        <h2> Count : {{ count($status)   }}</h2>
        <h6>Forearch loop</h6>
        <hr>
        @foreach($status as $index=>$list)

            <h4> {{ $index." ". $list  }}</h4>

        @endforeach

        <h6>For loop</h6>
        <hr>
        @for ($i = 0; $i <=5; $i++)
            <h5> {{  $i }}</h5>
        @endfor

        <h6>Associative array</h6>
        <hr>
        @foreach($data as $title=>$discription)

            <h4> {{  $title ." - ". $discription  }} </h4>
        @endforeach
        <hr>

        <h3>Switch</h3>

        @switch($country)
            @case('india')

            <h6>Its India</h6>
@break
            @case('srilanka')
            <h6>its Srilanka</h6>
      @break
            @endswitch

    @else
        <h2>Records not availble</h2>
    @endif



@endsection
