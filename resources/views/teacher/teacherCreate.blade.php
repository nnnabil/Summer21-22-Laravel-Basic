@extends('layouts.app')
@section('content')

<h2>Create Teacher</h2>
<form action="{{route('teacherCreate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Add">
</form>
@endsection