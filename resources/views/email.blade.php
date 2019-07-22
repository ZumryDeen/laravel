@extends('layouts.app')
@section('content')

    <h1>Welcome Deen ! this is about page  </h1>


    Click the following link to verify your email {{url('/verifyemail/'.$email_token)}}

@endsection
