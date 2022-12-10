@extends('layouts.app')

@section('content')
<!-- dashboard -->
<div class="container">
    <div class="row justify-content-center">

        {{-- category numbers --}}
        <div class="col-md-6">
            <div class="card" style="width:100%;margin-bottom: 50px;">
                <div class="card-header" style="text-align: center;font-size: 25px;font-weight: bold;color:#817e7e">
                    Categories
                </div>
                <div class="card-body" style="text-align: center;">
                    <a href="{{ route('Category/index') }}"
                       style="text-decoration:none; font-size: 25px;font-weight: bold;color:#000;">{{$category}}</a>
                </div>
            </div>
        </div>

        {{-- book numbers --}}
        <div class="col-md-6">
            <div class="card" style="width:100%;margin-bottom: 50px;">
                <div class="card-header" style="text-align: center;font-size: 25px;font-weight: bold;color:#817e7e">
                    Books
                </div>
                <div class="card-body" style="text-align: center;">
                    <a href="{{ route('Book/index') }}"
                       style="text-decoration:none; font-size: 25px;font-weight: bold;color:#000;">{{$book}}</a>
                </div>
            </div>
        </div>

        {{-- user number --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="width:100%;margin-bottom: 50px;">
                        <div class="card-header" style="text-align: center;font-size: 25px;font-weight: bold;color:#817e7e">
                            Users
                        </div>
                        <div class="card-body" style="text-align: center;">
                            <a href="{{ route('User/index') }}"
                               style="text-decoration:none; font-size: 25px;font-weight: bold;color:#000;">{{$user}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
                {{-- <div class="col-md-6">
                    <div class="card" style="width:100%;margin-bottom: 50px;">
                        <div class="card-header" style="text-align: center;font-size: 25px;font-weight: bold;color:#817e7e">
                            Sales
                        </div>
                        <div class="card-body" style="text-align: center;">
                            <a href="/"
                               style="text-decoration:none; font-size: 25px;font-weight: bold;color:#000;">0</a>
                        </div>
                    </div>
                </div> --}}
    </div>
</div>

@endsection
