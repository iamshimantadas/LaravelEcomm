<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
  <br>
    <p class="text-center" style="font-size:30px;color:blue;">Add New Product</p>
<br>
<br>


   <div class="row">
    <div class="col-2"></div>
    <div class="col-8">

     <!-- add new product form -->
     <form action="{{url('/')}}/addproduct_data" method="post" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="productName" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="productName" id="productName" aria-describedby="product name" placeholder="Enter product name..." required>
  </div>
  <div class="mb-3">
    <label for="productdescp" class="form-label">Product Details</label>
    <textarea class="form-control" placeholder="enter product description...." name="productdescp" id="productdescp" rows="3" required></textarea>
  </div>
  <div class="mb-3">
  <label for="thumbimg" class="form-label">Thumb image</label>
  <input class="form-control" type="file" name="thumbimg" id="thumbimg" required>
</div>

    <div class="mb-3">
    <div class="row">
    <div class="col-6">
    <label for="mrp" class="form-label">MRP</label>
    <input type="text" class="form-control" name="mrp" id="mrp" aria-describedby="product MRP" placeholder="Porduct's MRP" required>
    </div>
    <div class="col-6">
    <label for="discount_price" class="form-label">Discount Price</label>
    <input type="text" class="form-control" name="discount_price" id="discount_price" aria-describedby="discount price" placeholder="discount price" required>
    </div>
    </div>
    </div>

    <div class="mb-3">
  <label for="quantity" class="form-label">Quantity</label>
  <input class="form-control" type="text" name="quantity" id="quantity" required>
</div>

<div class="mb-3">
    <div class="row">
    <div class="col-6">
    <label for="category_id" class="form-label">category</label>
    <select class="form-select" name="category_id" id="category_id" aria-label="select category" required>
  @foreach($cat as $cat)
    <option value="{{$cat->id}}">{{$cat->name}}</option>
  @endforeach
</select>
    </div>
    <div class="col-6">
    <label for="subcategory_id" class="form-label">subcategory</label>
    <select class="form-select" name="subcategory_id" id="subcategory_id" aria-label="select category" required>
  @foreach($subcat as $subcat)
    <option value="{{$subcat->id}}">{{$subcat->subname}}</option>
  @endforeach
</select>
    </div>
    </div>
    </div>

    <div class="mb-3">
    <label for="brandid" class="form-label">Brand</label>
    <select class="form-select" name="brandid" id="brandid" aria-label="select brand" required>
  @foreach($brand as $brand)
    <option value="{{$brand->id}}">{{$brand->name}}</option>
  @endforeach
</select>
</div>


<input type="hidden" value="1" name="status" id="status">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    <div class="col-2"></div>
   </div>


   <br>
   <br>
   <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>