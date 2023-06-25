<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ShopKart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu active">
            @foreach($cat as $cat)
            <li><a class="dropdown-item hvreffect" href="#">{{$cat->name}}</a></li>
            @endforeach
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<style>
      .hvreffect:hover {
  background-color: black;
  color:white;
}
</style>


<style>
.ptext{
    font-size:30px;
    color:black;
}
</style>
  <body>
  
<p class="text-center ptext">Latest Products</p>
<br>
<!-- products -->
<div class="row">

@foreach($product as $product)
   <div class="col-3">
   <div class="card" style="width: 18rem;">
  <img src="img/{{ $product->thumbimg }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $product->title }}</h5>
    <p class="card-text">{{ $product->descp }}</p>
    <form action="{{url('/')}}/showProduct" method="get"> @csrf <input type="hidden" value="{{ $product->id }}" name="productid" id="productid" required> <input class="btn btn-dark" type="submit" value="show"> </form>
  </div>
</div>
   </div>
   @endforeach


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>