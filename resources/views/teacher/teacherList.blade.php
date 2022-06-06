@extends('layouts.app')
@section('content')

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->phone}}</td>
            <td>{{$teacher->email}}</td>
        </tr>
    @endforeach
</table>


@endsection