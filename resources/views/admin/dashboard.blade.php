<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="{{url('/')}}/admindashboard">Home</a>
  <a href="{{url('/')}}/addcategory">Add Category</a>
  <a href="{{url('/')}}/updatecategory">Update category</a>
  <a href="{{url('/')}}/sub_category">Add subcategory</a>
  <a href="{{url('/')}}/updatesub_category">Update subcategory</a>
  <a href="{{url('/')}}/addbrand">Add new brand</a>
  <a href="{{url('/')}}/admin_allbrands">Update brands</a>
  <a href="{{url('/')}}/addnewproduct">New product</a>
  <a href="#about">Logout</a>
</div>

<div class="content">
  <h2>Admin dashboard</h2>
  <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  <h3>Resize the browser window to see the effect.</h3>
</div>

</body>
</html>
