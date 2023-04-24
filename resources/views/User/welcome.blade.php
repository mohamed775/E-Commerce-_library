@extends('layouts.app')

@section('content')
<head>
  <link href="{{ asset('css/home.css') }}"rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('/main')}}" target="_blank">HOME</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
            
            
              <ul class="dropdown-menu">
                @foreach($category as $category)
                <li><a class="dropdown-item" href="{{route('/books',$category->id)}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
    
          </li>
          
            <a href="{{route('/cart')}}" target="_blank">
             <img src="{{asset('image_main/static/Shopping_cart_icon.svg.png')}}" width="35px" height="35px" class="ccart">
            </a>

          <form class="form-inline my-2 my-lg-0" action="{{route('book/search')}}" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </div>
      </nav>

<div class="include">
 <div class="content">
 	<p class="rrr">Reading <span>IS</span> LiFe</p>
 </div>
</div>

<div class="blog">
	<div class="content">
     <div class="k">

    @foreach ($book as $book)    
	  <div class="part">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <center><img src="{{asset('image_main/photo/'.$book->image)}}"  alt="image" width="270px" height="340px"></center>
          </div>
          <div class="flip-card-back">
            <h1>{{$book->name}}</h1>
            <h2>{{$book->price}} EGP</h2>
            <h2>{{$book->author}}</h2>

            <form action="{{ route('addcart') }}" method="POST">
              @csrf
              <input type="hidden" name="book_id" value="{{$book->id}}">
              {{-- <input class="button" type="submit" value="add cart"> --}}
              <button class="button">Add to cart</button>
            </form>
            {{-- <p><button class="button">Add to cart</button></p> --}}
          </div>
       </div>
     </div>
    @endforeach
	
	  </div>
     </div>




</div>


 <div class="footer">
	<p>&copy; copyright by MOHAMED ZAKARYA</p>
	<ul>
	</ul><br>
     <div class="web">
       <a href="#"><img src="{{asset('image_main/static/index1.png')}}" class="img11" width="50px" height="50px" ></a>
       <a href="#"><img src="{{asset('image_main/static/ins.png')}}" width="50px" height="50px" ></a>
       <a href="#"><img src="{{asset('image_main/static/images.jpg')}}" class="img11" width="50px" height="50px" ></a>

     </div>

     </div>
        <main class="py-4">
        </main>
    </div>
</body>
</html>


@endsection
