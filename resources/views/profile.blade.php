@extends('layouts.app')
@section('content')

<h1>Welcome to your profile {{$name}}</h1>
<p>ID: {{$id}}</p>
<p>DOB: {{$dob}}</p>

<h2>Friends</h2>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection
