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
                <th scope="col">Email</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($user as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{ route('User/delete',$user->id) }}" onclick="return confirm('Are you sure? \n If you confirm you will remove this user ...')" class="btn btn-danger">Delete</a>
                        {{-- <a href="{{ route('User/show',$user->id) }}" class="btn btn-primary">View Details</a> --}}
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection