@extends('layouts.app')
@section('contents')

<a href="{{ url('/categories/create') }}" class="btn btn-success">Add new categories</a>
<hr>
<table class="table table-bordered">
    <tr>
        <th>name</th>
        <th>Action</th>

    </tr>
    @foreach ($category_list as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>
            <a href="" class="btn btn-warning btn-sm">Update</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>


        </td>
    </tr>

    @endforeach
</table>

@endsection
