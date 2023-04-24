@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('/main')}}" target="_blank">HOME</a>
        </li>

        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>


          <ul class="dropdown-menu">
            @foreach($category as $category)
            <li><a class="dropdown-item" href="{{route('/books',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
          </ul>

      </li> --}}

        <a href="{{route('/cart')}}" target="_blank">
         <img src="{{asset('image_main/static/Shopping_cart_icon.svg.png')}}" width="35px" height="35px" class="ccart">
        </a>

      <form class="form-inline my-2 my-lg-0" action="{{route('book/search')}}" method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

    </div>
  </nav>



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
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Book</th>
                <th scope="col">Price</th>
                <th scope="col">Control</th>

            </tr>
            </thead>
            <tbody class="table-light">
                @forelse ($book as $book)
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{$book->book->name}}</td>
                <td>{{$book->book->price}}</td>
                <td>
                    <a href="{{route('cart/delete',$book->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this book from cart ...')" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @empty
                <td>No books added to cart yet !</td>
            @endforelse
            </tbody>

        </table>
        <form action="{{ route('get-checkout') }}" method="POST">
            @csrf
            {{-- <p >Amount :  {{ $book->price }}</p> --}}
            <input type="hidden"name="amount" id="price" value="{{ $total_price }}">
            <button class="btn btn-secondary "id="checkout">Check Out  : {{ $total_price }}</button>
            {{-- <a href="{{  }}" >Buy</a> --}}
        </form>
    </div>
    <div class="col-md-4">
        @if(isset($success))
            <div class="alert alert-success text-center">
                {{ $success }}
            </div>
        @endif
        @if(isset($fail))
            <div class="alert alert-danger text-center">
                {{ $fail }}
            </div>
        @endif        <h2>choose the payment way </h2>
        <div id="showPayForm">

        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/cart.js')}}"></script> 
@endsection
