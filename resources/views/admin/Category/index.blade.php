@extends('layouts.app')

@section('content')
{{-- message --}}
<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($category as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ route('Category/edit',$category->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('Category/delete',$category->id) }}" onclick="return confirm('Are you sure? \n If you confirm you will remove all the items in this category ...')" class="btn btn-danger">Delete</a>
                        <a href="{{ route('Category/show',$category->id) }}" class="btn btn-primary">View Books</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{ route('Category/create') }}" class="btn btn-secondary ">Add New Category</a>
    </div>
</div>
</div>
@endsection