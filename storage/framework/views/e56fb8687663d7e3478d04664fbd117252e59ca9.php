<!-- Content Start -->
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <legend>&nbsp;</legend>
            <h1 class="m-0"><strong>Laravel Page</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="breadcrumb-item">Latest News</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Box Content  -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <div class="text-center"><h4><b>Ravenclaw</b></h4></div>
                <p></p>
              </div>
              <div class="icon">
                <div class="text-center"><img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Ravenclaw.webp" alt="AdminLTE Logo" width="100" height="100" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
              </div>
              <a href="<?php echo e(url('/anime')); ?>" class="small-box-footer">Anime Database&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <div class="text-center"><h4><b>Slytherin</b></h4></div>
                <p></p>
              </div>
              <div class="icon">
                <div class="text-center"><img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Slytherin.webp" alt="AdminLTE Logo" width="100" height="100" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
              </div>
              <a href="<?php echo e(url('/japanese')); ?>" class="small-box-footer">Japanese Database&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <div class="text-center"><h4><b>Hufflepuff</b></h4></div>
                <p></p>
              </div>
              <div class="icon">
                <div class="text-center"><img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Hufflepuff.webp" alt="AdminLTE Logo" width="100" height="100" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
              </div>
              <a href="<?php echo e(url('/korea')); ?>" class="small-box-footer">Korea Database&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <div class="text-center"><h4><b>Gryffindor</b></h4></div>
                <p></p>
              </div>
              <div class="icon">
                <div class="text-center"><img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Gryffindor.webp" alt="AdminLTE Logo" width="100" height="100" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
              </div>
              <a href="<?php echo e(url('/english')); ?>" class="small-box-footer">English Database&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

            <!-- Slider -->
            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title"><b>Slider</b></h3>
                <div class="card-tools">
                </div>
              </div>
              <div class="card-body">

<div class="container">
  <div class="mySlides">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/Hogwarts house.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/episode.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/part1&2.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/slice.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="<?php echo e(asset('AdminLTE-master')); ?>/dist/img/long.png" style="width:100%">
  </div>
    
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

</div>
</div>
</div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>


<!-- jQuery -->
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/dist/js/adminlte.min.js"></script>
<script src="<?php echo e(asset('AdminLTE-master')); ?>/dist/js/demo.js"></script>

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style> 

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\000Laravel_Asterisk\Laravel_Asterisk\resources\views/layouts/content.blade.php ENDPATH**/ ?>