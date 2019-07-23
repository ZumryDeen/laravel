@extends('layouts.app')
@section('content')

    <h1>Click the Link To Verify Your Email</h1>
    Click the  link to verify your email {{url('/verifyemail/'.$email_token)}}

@endsection
