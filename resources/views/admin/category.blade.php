<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add category page</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    
<br>
<br>

<h2 style="color: blue;" class="text-center">Add Category</h2>

<br>
<br>

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">

    <!-- category add form  -->
    <form action="{{url('/')}}/addcategory_data" enctype="multipart/form-data" method="post">
      @csrf
  <div class="mb-3">
    <label for="category_name" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="category_name" name="category_name" aria-describedby="Enter category name" required>
</div>
  <div class="mb-3">
    <label for="category_descrp" class="form-label">Enter category description</label>
    <input type="text" class="form-control" name="category_descrp" id="category_descrp" required>
  </div>
  <div class="mb-3">
    <label for="category_status" class="form-label">Active Status</label>
    <input type="text" value="1" class="form-control" name="category_status" id="category_status" required>
  </div>
  <div class="mb-3">
  <label for="category_img_file" class="form-label">Select product image</label>
  <input class="form-control" type="file" id="category_img_file" name="category_img_file" required>
</div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>


    </div>
    <div class="col-2"></div>
</div>





</body>
</html>