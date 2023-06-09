<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>all sub-categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Sub Categories</a>
    <form class="d-flex" role="search" action="{{url('/')}}/searchcategory" method="get">
    @csrf  
    <input class="form-control me-2" type="text" name="searchProductName" id="searchProductName" placeholder="Search category" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>


<div class="row">
    <div class="col-1"></div>
    <div class="col-10">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sub-Category</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($subcat as $subcat)
    <tr>
      <th scope="row">{{ $subcat->subname }}</th>
      <td>{{ $subcat->name }}</td>
      <td>{{ $subcat->descp }}</td>
      <td><img src="img/{{ $subcat->sub_cat_image }}" style="max-height:100px;max-width:150px;" alt=""></td>
      <td><?php if($subcat->status==1){echo "<font style='color:green;'>available</font>";}else{ echo "<font style='color:red;'>empty</font>"; }  ?></td>
      <td> <form action="{{url('/')}}/updatecategoryrec" method="get"> @csrf <input type="hidden" value="{{ $subcat->id }}" name="subcategoryid" id="subcategoryid" required> <input type="submit" class="btn btn-dark" value="Edit"></form> </td>
    </tr>
    @endforeach

  </tbody>
</table>

    </div>
    <div class="col-1"></div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
