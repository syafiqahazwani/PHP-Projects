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
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
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
              <h3 class="num" data-val="{{ $numberAnime }}">{{ $numberAnime }}</h3> 
              <p><b>Anime Database</b></p>
              </div>
              <div class="icon">
              <i class="fa fa-life-ring"></i>
              </div>
              <a href="{{ url('/anime') }}" class="small-box-footer">For View&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
            <div class="inner">
            <h3 class="num" data-val="{{ $numberJapan }}">{{ $numberJapan }}</h3>
              <p><b>Japanese Database</b></p>
              </div>
              <div class="icon">
              <i class="fas fa-cubes"></i>
              </div>
              <a href="{{ url('/japanese') }}" class="small-box-footer">For View&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 class="num" data-val="{{ $numberKorea }}">{{ $numberKorea }}</h3>
              <p><b>Korea Database</b></p>
              </div>
              <div class="icon">
              <i class="fas fa-bomb"></i>
              </div>
              <a href="{{ url('/korea') }}" class="small-box-footer">For View&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
            <div class="inner">
            <h3 class="num" data-val="{{ $numberEnglish }}">{{ $numberEnglish }}</h3>
              <p><b>English Database</b></p>
              </div>
              <div class="icon">
              <i class="fas fa-heartbeat"></i>
              </div>
              <a href="{{ url('/english') }}" class="small-box-footer">For View&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

<script>
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
</script>

            <!-- Slider Free -->
        <div class="row">
          <div class="col-md-8">
  
            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title">Slider Free</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                  
                    <div class="card-body">
<div class="container">

  <div class="mySlides">
    <img src="{{asset('AdminLTE-master')}}/dist/img/Harry Potter.png" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="{{asset('AdminLTE-master')}}/dist/img/Divergent.png" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="{{asset('AdminLTE-master')}}/dist/img/Hunger Games.png" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

</div>
</div>

                  </div>
                </div>
              </div>
            </div>

            <!-- Others -->
            <div class="card">
              <div class="card-header border-transparent">
                <span class="card-title">@My Laravel Page</span>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">  
                </div>
              </div>
            </div>
          </div>

         <!-- Database For View -->
          <div class="col-md-4">

            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title">Database For View</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
             
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">

                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('AdminLTE-master')}}/dist/img/hogwarts-logo.png" alt="" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{ url('/mydatabase') }}" class="product-title">My Database
                        <span class="badge bg-gray float-right">@</span></a>
                      <span class="product-description">
                      Collection about Syafiqah
                      </span>
                    </div>
                  </li>

                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('AdminLTE-master')}}/dist/img/Ravenclaw.webp" alt="" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{ url('/anime') }}" class="product-title">Anime Database
                        <span class="badge badge-info float-right">@</span></a>
                      <span class="product-description">
                        Collection Of Watch Anime
                      </span>
                    </div>
                  </li>
          
                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('AdminLTE-master')}}/dist/img/Slytherin.webp" alt="" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{ url('/japanese') }}" class="product-title">Japanese Database
                        <span class="badge badge-success float-right">@</span></a>
                      <span class="product-description">
                      Collection Of Japanese Movie or Drama
                      </span>
                    </div>
                  </li>
                  
                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('AdminLTE-master')}}/dist/img/Hufflepuff.webp" alt="" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{ url('/korea') }}" class="product-title">Korea Database
                        <span class="badge badge-warning float-right">@</span></a>
                      <span class="product-description">
                      Collection Of Korea Movie or Drama
                      </span>
                    </div>
                  </li>
                
                  <li class="item">
                    <div class="product-img">
                      <img src="{{asset('AdminLTE-master')}}/dist/img/Gryffindor.webp" alt="" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="{{ url('/english') }}" class="product-title">English Database
                        <span class="badge badge-danger float-right">@</span></a>
                      <span class="product-description">
                      Collection Of English Movie or Drama
                      </span>
                    </div>
                  </li>
                
                </ul>
              </div>     
              <div class="card-footer text-center">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

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
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>

