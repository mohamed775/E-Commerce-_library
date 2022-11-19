@extends('layouts.app')
@section('content')
<head>

        <!-- Fonts -->
        <link href="{{ asset('css/navbar.css') }}"rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    



      {{-- cart --}}
      <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book</th>
                    <th scope="col">Price</th>
                    <th scope="col">Control</th>
                </tr>
                </thead>
                <tbody class="table-light">
                <tr>
                    <th scope="row">1</th>
                    <td>Drama</td>
                    <td>40EGP</td>
                    <td>
                        <a href="/" onclick="return confirm('Are you sure? \n If you confirm you will remove this book from cart ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <a href="/" class="btn btn-secondary ">Buy</a>
        </div>
    </div>

</body>
@endsection