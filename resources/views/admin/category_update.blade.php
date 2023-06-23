<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update category page</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    
<br>
<br>

<h2 style="color: blue;" class="text-center">Update Category</h2>

<br>
<br>

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">

    @foreach($cat as $cat)
    <!-- category add form  -->
    <form action="{{url('/')}}/updatecategory_data" enctype="multipart/form-data" method="post">
      @csrf
      <input type="hidden" name="category_id" id="category_id" value="{{ $cat->id }}" required>
  <div class="mb-3">
    <label for="category_name" class="form-label">Category Name</label>
    <input type="text" class="form-control" value="{{ $cat->name }}" id="category_name" name="category_name" aria-describedby="Enter category name" required>
</div>
  <div class="mb-3">
    <label for="category_descrp" class="form-label">Enter category description</label>
    <input type="text" class="form-control" value="{{ $cat->description }}" name="category_descrp" id="category_descrp" required>
  </div>
  <div class="mb-3">
    <label for="category_status" class="form-label">Active Status</label>
    <select name="category_status" id="category_status" class="form-select" aria-label="Default select example">
  <option value="1" selected>Available</option>
  <option value="0">Unavailable</option>
</select>
    <!-- <input type="text" value="1" class="form-control" name="category_status" id="category_status" required> -->
  </div>

<!-- image preview before and after upload -->
  <div class="mb-3">
    <img src="img/{{ $cat->image }}" id="preview-selected-image" height="50" width="50" alt="">
  <label for="category_img_file" class="form-label">Select product image</label>
  <input class="form-control" type="file" id="category_img_file" name="category_img_file" value="{{ $cat->image }}" onchange="previewImage(event);">
</div>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
@endforeach

    </div>
    <div class="col-2"></div>
</div>





</body>

<script>
  /**
 * Create an arrow function that will be called when an image is selected.
 */
const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block";
    }
};
</script>

</html>





