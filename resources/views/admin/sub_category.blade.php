<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add subcategory</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    
<br>
<br>

<h2 style="color: blue;" class="text-center">Add Sub-Category</h2>

<br>
<br>

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">

    <!-- category add form  -->
    <form action="{{url('/')}}/sub_category_data" enctype="multipart/form-data" method="post">
      @csrf
  <div class="mb-3">
    <label for="subcategory_name" class="form-label">Sub-Category Name</label>
    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" aria-describedby="Enter category name" required>
</div>
<div class="mb-3">
    <label for="category_id" class="form-label">Select Category</label>
    <select class="form-select" name="category_id" id="category_id" aria-label="Default select example" required>
    @foreach($cat as $cat)
  <option value="{{ $cat->id }}">{{ $cat->name }}</option>
  @endforeach  
</select>
</div>
  <div class="mb-3">
    <label for="category_descrp" class="form-label">Enter details</label>
    <input type="text" class="form-control" name="category_descrp" id="category_descrp" required>
  </div>
  <div class="mb-3">
    <label for="category_status" class="form-label">Active Status</label>
    <select class="form-select" name="category_status" id="category_status" aria-label="Default select example" required>
  <option value="1" selected>Available</option>
  <option value="0">Un-available</option>
</select>  
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