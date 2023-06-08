<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <br>
    <br>

    <!-- login form for admin -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

        <form action="{{url('/')}}/adminlogin" method="post">
            @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
    @error('email')
    <span style="color:red;">{{$message}}</span>
    @enderror
</div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" value="{{ old('password') }}" class="form-control" name="password" id="password" required>
    @error('password')
    <span style="color:red;">{{$message}}</span>
    @enderror
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        <div class="col-2"></div>
    </div>

    


</body>
<script src="js\bootstrap.min.js"></script>
</html>