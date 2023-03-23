<?php include 'fpincludes/fp-header.php';?>

<div class="container home-container">
  <div class="photos top-photo-div">
    <img src="fpimages/image4.jpeg" class="drag-photo" alt="photo of a drag queen">
    <img src="fpimages/image0.jpeg" class="drag-photo" alt="photo of a drag queen">
    <img src="fpimages/image6.jpeg" class="drag-photo" alt="photo of a drag queen">
  </div>
  <div class="photos bottom-bottom-div">
    <img src="fpimages/image1.jpeg" class="drag-photo" alt="photo of a drag queen">
    <img src="fpimages/image5.jpeg" class="drag-photo" alt="photo of a drag queen">
    <img src="fpimages/image2.jpeg" class="drag-photo" alt="photo of a drag queen">
  </div>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="fpimages/image4.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>
<div class="mySlides fade">
  <img src="fpimages/image0.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>
<div class="mySlides fade">
  <img src="fpimages/image6.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>
<div class="mySlides fade">
  <img src="fpimages/image1.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>
<div class="mySlides fade">
  <img src="fpimages/image5.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>
<div class="mySlides fade">
  <img src="fpimages/image2.jpeg" class="slide-image" alt="Photo of a drag queen">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div class="dot-div" style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
</div> 

<?php include 'fpincludes/fp-footer.php';?>