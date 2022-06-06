@extends('layouts.app')
@section('content')

<h2>Create Teacher</h2>
<form action="{{route('teacherCreate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}">
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Add">
</form>
@endsection