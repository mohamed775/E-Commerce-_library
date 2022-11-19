@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            <tr>
                <th scope="row">1</th>
                <td>تراب الماس</td>
                <td>..</td>
                <td>40</td>
                <td>..</td>
                <td>
                    <a href="/" class="btn btn-success">Edit</a>
                    <a href="/" onclick="return confirm('Are you sure? \n If you confirm you will remove all the items in this category ...')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
        <a href="/" class="btn btn-secondary ">Add New Book</a>
    </div>
</div>
@endsection