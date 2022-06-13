@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->id}}</td>
        <td><a href="/studentEdit/{{$student->id}}">Details</a></td>
        <td><a href="/studentDelete/{{$student->id}}">Delete</a></td>
    </tr>
    @endforeach

</table>
<div class="d-flex justify-content-center">
    {!! $students->links() !!}
</div>
@endsection