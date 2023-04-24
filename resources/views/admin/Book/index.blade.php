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
                <th scope="col">Cover</th>
                <th scope="col">Price</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    <td><img src="{{ asset('image_main/photo/'. $book->image) }}" width="50" height="50"
                        alt=""></td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->author}}</td>
                    <td> 
                        <?php
                        $bk = $book->cat_id;
                        $category = App\Models\Category::select('name')->where('id', $bk)->first();
                        ?>
                        {{ $category->name }}</td>
                    <td>
                        <a href="{{ route('Book/edit',$book->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('Book/delete',$book->id) }}" onclick="return confirm('Are you sure? \n If you confirm you will remove this book ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{ route('Book/create') }}" class="btn btn-secondary ">Add New Book</a>
       {{-- <div class="d-flex justify-content-center">
            {!! $books->links() !!}
        </div>--}}
    </div>
</div>
</div>
@endsection