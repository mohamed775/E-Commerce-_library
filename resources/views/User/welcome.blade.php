@extends('layouts.app')

@section('content')

<style>

body
{
	margin: 0;
}

.content
{
  margin: auto;
  width: 1400px;
}

/*include*/
.include
{
	background-image: url(image_main/photo/back.jpeg);
    background-repeat: no-repeat;
    background-size:cover;
	width: 100%;
	height: 900px;

}

.include .rrr
{
  margin: 0px;
  font-size: 80px;
  font-weight: bold;
  text-align: center;
  padding-top: 200px;
  padding-left: 10px;
  font-family: tahoma;
  color: white;

}
span{
    color:red;
}

/*blog*/

.blog
{
  background-color: #DEDCF0;
  width: 100%;
  height: 2600px;
  padding-top: 37px;

}

.blog .part
{
  width: 21%;
  height: 360px;
  background: #fff;
  margin: 0;
  border-radius: 10px;
  float: left;
  margin-left:45px;
  margin-bottom: 40px;
  padding-top: 10px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.part:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.flip-card-back h1,h2,p{
    margin-top:30px;
}
.flip-card-back p{
    margin-top:100px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: #555;
  background-color: #fff;
  text-align: center;
  cursor: pointer;
  width: 100%;
    margin-top: 15px;
    font-size: 20px;
    font-weight: bold;
}

.button:hover {
  background-color: #555;
    color: #fff;
}




.blog .writing1
{
	width: 35%;
    margin-left: 100px;
	height: 50px;
	padding-top: 70px;
	color: #222;
	padding-left: 120px;
    float: left;
}

.blog .writing1 p
{
	font-family: tahoma;
}

.blog .writing2
{
	width: 35%;
	height: 50px;
	padding-top: 70px;
	color: #222;
	padding-left: 120px;
    float: left;
}


.blog .writing2 p
{
	font-family: tahoma;
}

hr
{
	color: #fff;
}

.blog .writing3
{
    margin-left: 100px;
    margin-top: 50px;
	width: 35%;
	height: 50px;
	padding-top: 140px;
	color: #222;
	padding-left: 120px;
    float: left;
}

.blog .writing3 p
{
	font-family: tahoma;
}

.blog .writing4
{
    margin-top: 50px;
	width: 35%;
	height: 50px;
	padding-top: 140px;
	color: #222;
	padding-left: 120px;
    float: left;
}

.blog .writing4 p
{
	font-family: tahoma;
}

.footer
{
	width: 100%;
	height: 230px;
	background: #222;
	padding-top: 20px;
	padding-bottom: 20px;
    text-align: center;
}

.footer ul
{
    text-align: center;
	color: #fff;
	padding-left: 30px;
	font-family: cursive;
}

.footer p
{
	text-align: center;
	color: #fff;
	font-family: tahoma;
	font-size: 20px;
}

.footer ul li
{
  list-style-position: inside;
  color: #fff;

}

.footer i
{
   color: #ff0000;
}
.web a{

    padding: 5px;
}

.bota{
    width: 100%;
    height: 120px;
    background-color:#222;
}
.bota button {
  background-color:lightgray;
  color: black;
  padding: 14px 20px;
  margin-left:46.4% ;
    margin-top: 30px;
  border: 3px solid #fff;
  cursor: pointer;
  width: 150px;
  opacity: 0.9;
    font-size: 22px;
    font-weight: bold;
}

.bota button:hover {
  opacity:1;
    font-size: 25px;
    font-weight: bolder;
      background-color:#fff;
  color:#f44336 ;
}

 .bota .deletebtn {
  width: 40%;
     margin-left: 5px;
}

 .bota .cancelbtn {
     width: 40%;
  background-color: #ccc;
  color: black;
     margin-left: 5px;
}
.bota .cancelbtn:hover{
      background-color:black;
  color: #ccc;
}

 .bota .deletebtn {
  background-color: #f44336;
}
 .bota .deletebtn:hover {
  background-color:#ccc ;
     color: #f44336;
}

 .bota .container {
  padding: 16px;
  text-align: center;
}

 .bota .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #474e5d;
  padding-top: 50px;
}

 .bota .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}


 .bota hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


 .bota .close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

 .bota .close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


 .bota .clearfix:after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
 .bota .cancelbtn, .deletebtn {
     width: 100%;
  }
}

.w , .ww , .www , .wwww {
    display:;
}
.aw{
    display: block;
}

.web{

}

.img11{
    border: 2px solid #fff;
    border-radius: 45%;
    opacity: 0.8;
}
.img11:hover{

    border-radius: 10%;
    opacity:1;

}
.web{
    margin-left: 40px;
}

    </style>
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
             <img src="image_main/photo/Shopping_cart_icon.svg.png" width="35px" height="35px" class="ccart">
            </a>

          <form class="form-inline my-2 my-lg-0" action="{{route('book/search')}}" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </div>
      </nav>

{{-- <div class="include">
 <div class="content">
 	<p class="rrr">Reading <span>IS</span> LiFe</p>
 </div>
</div> --}}

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


     <div class="kkkkkk">
	  <div class="writing1">
	  	<h2>John Berger</h2>
	  	<p>
John Berger’s decision to give away half of his £5,000 prize money in 1972 was one of the Booker’s most controversial moments. In this discorso, delivered at the Café Royal in London after being announced as the winner, he set out the reasons behind his actions
	  	</p>
	  	<hr />
	  </div>

	  <div class="writing2">
	  	<h2>Jo Hamya</h2>
	  	<p>
In this new film to mark the 50th anniversary of John Berger’s Booker win, Jo Hamya revisits the prize’s most controversial moment, reveals what happened to Berger’s prize money and explores the legacy and impact of his 1972 novel, G.
	  	</p>
	  	<hr />
	  </div>
     </div>


     <div class="kkkkkkk">
      <div class="writing3">
	  	<h2>Sarah Gwonyoma</h2>
	  	<p>
In this personal essay, Sarah Gwonyoma recalls the life-changing effect of reading Chimamanda Ngozi Adichie’s debut novel - and how she observed elements of her own life in fiction for the first time
	  	</p>
	  </div>

      <div class="writing4">
	  	<h2>Donna Mackay-Smith</h2>
	  	<p>
Bob Jackson read all 315 shortlisted books in the Booker Library in less than four years. Here, he explains how he did it and tells us which titles he loved the most - and which were the most challenging
	  	</p>
	  </div>
	</div>
     </div>

</div>


 <div class="footer">
	<p>&copy; copyright by MOHAMED ZAKARYA</p>
	<ul>
		<li>strong</li>
		<li>skills</li>
		<li>thinking</li>
	</ul><br>
     <div class="web">
       <a href="#"><img src="image_main/photo/index1.png" class="img11" width="50px" height="50px" ></a>
       <a href="#"><img src="image_main/photo/ins.png" class="img11" width="50px" height="50px" ></a>
       <a href="#"><img src="image_main/photo/images.jpg" class="img11" width="50px" height="50px" ></a>

     </div>

     </div>


<div class="bota">

  <button onclick="document.getElementById('id01').style.display='block'">Log Out</button>
  <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
   <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Log Out From Page</h1>
      <p>Are you sure you want to Log Out ?</p>

      <div class="clearfix">
        <button type="button" id="fun" class="deletebtn">Log Out</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      </div>
    </div>
   </form>
  </div>
</div>
        <main class="py-4">
        </main>
    </div>
</body>
</html>


@endsection
