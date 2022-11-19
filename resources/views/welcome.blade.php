@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyBook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
      />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
        <link href="{{ asset('css/navbar.css') }}"rel="stylesheet">
        <link href="{{ asset('css/book.css') }}"rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}
 {{-- <link href="{{ asset('css/slider.css') }}"rel="stylesheet"> --}}
 {{-- <script src="{{ asset('js/slider.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
    </head>
    <body class="antialiased">
      {{-- book navbar --}}
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DRAMA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ROMANCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ACTION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">HORROR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NOVELS</a>
            </li>
          </ul>
          
            <a href="{{ route('cart')}}">
              <i class="fa-solid fa-cart-shopping" >
              </i>
              </a>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

{{-- 
            <div class="border1"></div>
            <p id="room">ABOUT BOOKS</p>
            <div class="border2"></div>
            <div class="container text-center">
              <div class="row justify-content-center">
            <div class="card col-3">
              <img class="book" src="{{ asset('images/book1.jpeg')}}" alt="" />
              <h2 style="text-align: center">THE FAULT IN OUR STARS</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <h4>40EGP</h4>
              <img class="sora" src="{{ asset('images/et.png')}}" alt="" />
            </div>
            <div class="card col-3">
              <img class="book" src="{{ asset('images/book2.jpg')}}" alt="" />
              <h2 style="text-align: center">THE SILENT WIFE</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <h4>40EGP</h4>
              <img class="sora" src="{{ asset('images/book3.jpg')}}" alt="" />
            </div>
            <div class="card col-3">
              <img class="book" src="{{ asset('images/book3.jpg')}}" alt="" />
              <h2 style="text-align: center">THE SHINING</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <img class="sora" src="{{ asset('images/et.png')}}" alt="" />
            </div>
            <div class="card col-3">
              <img class="book" src="./noga.jpg" alt="" />
              <h2 style="text-align: center">mano</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <img class="sora" src="./noga.jpg" alt="" />
            </div>
            <div class="card col-3">
              <img class="book" src="./noga.jpg" alt="" />
              <h2 style="text-align: center">mano</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <img class="sora" src="./noga.jpg" alt="" />
            </div>
            <div class="card col-3">
              <img class="book" src="./noga.jpg" alt="" />
              <h2 style="text-align: center">mano</h2>
              <p style="text-align: center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut,
                omnis!
              </p>
              <img class="sora" src="./noga.jpg" alt="" />
            </div>
              </div>
            </div> --}}
            <section class="section-selling-cards">
              <div class="books-container">

                      <figure class="book">
                          <div class="book-img-box">
                          <img src="{{ asset('images/book2.jpg')}}" alt="book" />
                          </div>
                          <div class="book-details">
                          <div class="book-title-box">
                              <p>TITLE</p>
                              <h2 style="/*color: #74a3cf;*/font-weight: bold;">blabla</h2>
                              <h2 href="/" class="title book-title-link" style="font-weight: normal;font-size:14px;">
                                  bhkefbwbaebguaebgujbsgjsbgbj
                              </h2>
                          </div>
                          <div class="book-author-box">
                              <p>AUTHOR</p>
                              <h4 class="author">
                                 ay zft
                              </h4>
                          </div>
                          <div class="book-price-box">
                              <p>PRICE</p>
                              <h4 class="price">40<span>EGP</span></h4>
                          </div>
                          <a href="{{ route('cart')}}">
                          <button class="cart-btn">Add to cart</button>
                          </a>
                          </div>
                      </figure>



                      <figure class="book">
                        <div class="book-img-box">
                        <img src="{{ asset('images/book4.jpeg')}}" alt="book" />
                        </div>
                        <div class="book-details">
                        <div class="book-title-box">
                            <p>TITLE</p>
                            <h2 style="/*color: #74a3cf;*/font-weight: bold;">naglaa</h2>
                            <h2 href="/" class="title book-title-link" style="font-weight: normal;font-size:14px;">
                                bhkefbwbaebguaebgujbsgjsbgbj
                            </h2>
                        </div>
                        <div class="book-author-box">
                            <p>AUTHOR</p>
                            <h4 class="author">
                               5ara
                            </h4>
                        </div>
                        <div class="book-price-box">
                            <p>PRICE</p>
                            <h4 class="price">40<span>EGP</span></h4>
                        </div>
                        {{-- <div class="add-to-cart"> --}}
                            {{-- <div class="cart-and-info">
                                <form  method="POST" action="{{ route('like.book')}}">
                                    @csrf
                                    <input type="hidden" value="{{ $book->id }}" name="bookid">
                                    @if (Auth::user())
                                        <a href="" class="cart-btn addcart" book_id="{{ $book->id }}"> add to cart </a>
                                    @endif
                                    @if (!Auth::user())
                                        <a class="cart-btn" href="{{ route('login') }}">add to cart</a>
                                    @endif
                                    <button type="submit"class="btn btn-outline-light" style="color:black;padding:0 0 0 10px;margin:0px;border:0px; font-size:15px;position:relative; bottom: -34px;
                                    right: -50%;" >More Details -></button>
                                </form>
                            <button class="cart-btn">Add to cart</button>
                            {{-- </div> --}}
                        {{-- </div>  --}}
                        <button class="cart-btn">Add to cart</button>
                        </div>
                    </figure>
                    
                    <figure class="book">
                      <div class="book-img-box">
                      <img src="{{ asset('images/book2.jpg')}}" alt="book" />
                      </div>
                      <div class="book-details">
                      <div class="book-title-box">
                          <p>TITLE</p>
                          <h2 style="/*color: #74a3cf;*/font-weight: bold;">naglaa</h2>
                          <h2 href="/" class="title book-title-link" style="font-weight: normal;font-size:14px;">
                              bhkefbwbaebguaebgujbsgjsbgbj
                          </h2>
                      </div>
                      <div class="book-author-box">
                          <p>AUTHOR</p>
                          <h4 class="author">
                             5ara
                          </h4>
                      </div>
                      <div class="book-price-box">
                          <p>PRICE</p>
                          <h4 class="price">40<span>EGP</span></h4>
                      </div>
                      {{-- <div class="add-to-cart"> --}}
                          {{-- <div class="cart-and-info">
                              <form  method="POST" action="{{ route('like.book')}}">
                                  @csrf
                                  <input type="hidden" value="{{ $book->id }}" name="bookid">
                                  @if (Auth::user())
                                      <a href="" class="cart-btn addcart" book_id="{{ $book->id }}"> add to cart </a>
                                  @endif
                                  @if (!Auth::user())
                                      <a class="cart-btn" href="{{ route('login') }}">add to cart</a>
                                  @endif
                                  <button type="submit"class="btn btn-outline-light" style="color:black;padding:0 0 0 10px;margin:0px;border:0px; font-size:15px;position:relative; bottom: -34px;
                                  right: -50%;" >More Details -></button>
                              </form>
                          <button class="cart-btn">Add to cart</button>
                          {{-- </div> --}}
                      {{-- </div>  --}}
                      <button class="cart-btn">Add to cart</button>
                      </div>
                  </figure>
              </div>
          </section>

</html>
@endsection
