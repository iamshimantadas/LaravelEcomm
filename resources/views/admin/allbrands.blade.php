<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>all categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

<br>
<br>


<div class="row">
    <div class="col-1"></div>
    <div class="col-10">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
      <th scope="col">Logo</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($brand as $brand)
    <tr>
      <th scope="row">{{$brand->name}}</th>
      <td>{{$brand->type}}</td>
      <td><img src="img/{{ $brand->logo }}" style="max-height:100px;max-width:150px;" alt=""></td>
      <td><?php if($brand->status==1){echo "<font style='color:green;'>available</font>";}else{ echo "<font style='color:red;'>empty</font>"; }  ?></td>
      <td> <form action="{{url('/')}}/updatecategoryrec" method="get"> @csrf <input type="hidden" value="$brand->id" name="categoryid" id="categoryid" required> <input type="submit" class="btn btn-dark" value="Edit"></form> </td>
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

