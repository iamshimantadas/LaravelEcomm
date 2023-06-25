<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach($product as $product)
    <title>{{ $product->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
</head>
  <body>

  <br>
  <br>


  <div class="row">
    <div class="col-4"> <img src="img/{{$product->thumbimg }}" alt="" style="max-height:300px;max-width:400px;"> </div>
    <div class="col-1"></div>
    <div class="col-7">
        <h4>{{ $product->title }}</h4>
        <br>
        <p>{{ $product->descp }}</p>
        <br>
        <p style="font-size:20px;">Price: <b>{{ $product->discount_price }}</b>/<sup><strike>{{ $product->mrp }}</strike></sup></p>
        <br>
        <p style="font-size:20px;">Stock: <?php if($product->status==0){ echo "<font style='color:red'>Out Of Stock</font>"; }else{ echo "<font style='color:green'>In Stock</font>"; } ?> </p>
<br>
<br>
<!-- add to cart/ buy now -->
<form action="{{url('/')}}/checkOut" method="get">
    @csrf
<input type="hidden" name="productid" id="productid" value="{{$product->id}}" requied>
<label for="quantity">Quantity</label> <input for="quantity" name="quantity" type="number" value="1" min="1" max="{{$product->quantity}}" required>
<input type="hidden" name="productname" id="productname" value="{{ $product->title }}" required>
    <input type="hidden" name="price" id="price" value="{{ $product->discount_price }}" required>
   <br><br>
    <button class="btn btn-warning">Buy Now</button>
</form>


    </div>
</div>
    @endforeach
<!-- end of product loop -->


<script>
   function increment() {
      document.getElementById('quantity').stepUp();
   }
   function decrement() {
      document.getElementById('quantity').stepDown();
   }
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
