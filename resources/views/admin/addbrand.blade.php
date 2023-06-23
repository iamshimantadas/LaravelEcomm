<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add New Brand</title>
  </head>
  <body>
    
  <br>
  <br>

  <p class="text-center" style="color:blue;font-size:30px;">Add New Brand</p>

  <br>
  <br>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

<!-- add new brand form -->
<form action="{{url('/')}}/addbrandrec" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="brandname" class="form-label">Brand</label>
    <input type="text" class="form-control" placeholder="Enter brand name...." name="brandname" id="brandname" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
    <label for="brandtype" class="form-label">Type</label>
    <input type="text" class="form-control" placeholder="Enter brand type like which type of products it offers ...." name="brandtype" id="brandtype" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
  <label for="logofile" class="form-label">Logo</label>
  <input class="form-control" type="file" name="logofile" id="logofile" required>
</div>
    <input type="hidden" value="1" name="status" id="status" required>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        <div class="col-2"></div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>