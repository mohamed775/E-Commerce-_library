@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            <tr>
                <th scope="row">1</th>
                <td>Naglaa</td>
                <td>naglaa@gmail.com</td>
                <td>01158226755</td>
                <td>
                    <a href="/" onclick="return confirm('Are you sure? \n If you confirm you will remove all the items in this category ...')" class="btn btn-danger">Delete</a>
                    <a href="/" class="btn btn-primary">View details</a>
                </td>
            </tr>
            </tbody>
        </table>
        {{-- <a href="/" class="btn btn-secondary ">Add New user</a> --}}

    </div>
</div>
@endsection