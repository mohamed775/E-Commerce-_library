
@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('Book/store') }}"enctype="multipart/form-data" >
                    @csrf
                    {{-- Name --}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cover</label>
                        <input type="file" class="form-control" required name="image" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" class="form-control"required name="price"  id="exampleInputEmail1" >
                        @error('price')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
  
                    {{-- Author --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author</label>
                        <input type="text" class="form-control"required name="author"  id="exampleInputEmail1" >
                        @error('author')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    {{-- category --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <select name="cat_id" id="" class="form-control" required>
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('cat_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
