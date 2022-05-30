@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->id}}</td>
        <td><a href="/studentEdit/{{$student->name}}/{{$student->id}}">Details</a></td>
    </tr>
    @endforeach

</table>
@endsection