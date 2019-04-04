<!DOCTYPE HTML>
<html>
<head>
    <title>LOVE Watches</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">LOVE Watches</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Contact us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
            <input type="hidden" name="page">
            <input class="form-control mr-sm-2" type="text" name="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
    @foreach ($products as $product)
            <div class="col-md-4" style="border: 1px solid #dedede">
        <form method="get" action="{{ url('order') }}">
        <img src="{{ $product->img_url }}" width="150" height="250">
        <p>{{ $product->name }} {{$product->model}}</p>
        <strong style="color:red;">{{$product->price}} UAH</strong>
            <input name="id" title="id" type="hidden" value="{{$product->id}}">
            <button>Buy</button>
        </form>
            </div>
    @endforeach
    </div>
    <br>
    {{$products->links()}}
</div>

</body>
</html>