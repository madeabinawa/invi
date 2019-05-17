<!doctype html>
<html lang="en" id="home">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    {{-- custom fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Gugi|Roboto+Slab" rel="stylesheet">
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/aos.js"></script>
    {{-- bootstrap css --}}
    {{ HTML::style('css/app.css') }}
    {{-- custom css --}}
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/aos.css')}}

    <title>Kundangan Yuk</title>
  </head>
  <body>
    {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">Kundangan Yuk</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar navbar-light" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto" >
                    <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link page-scroll" href="#templates">Templates</a>
                    <a class="nav-item nav-link page-scroll" href="#features">Features & Pricing</a>
                    <a class="nav-item nav-link page-scroll" href="#home">About</a>
                    <a class="nav-item btn btn-primary tombol" href="#">Buy</a>
                    </div>
                </div>
            </div>
        </nav>

    {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Kundangan Yuk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto" >
                <a class="nav-item nav-link active page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link page-scroll" href="#templates">Templates</a>
                <a class="nav-item nav-link page-scroll" href="#features">Features & Pricing</a>
                <a class="nav-item nav-link page-scroll" href="#home">About</a>
                <a class="nav-item btn btn-primary tombol" href="#">Buy</a>
                </div>
            </div>
        </div>
    </nav> --}}
    {{-- navbar end--}}

    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container" data-aos="fade-right">
                <h1 class="display-4">We bring you the <span>true experience</span><br>in your <span> special moment</span></h1>
        </div>
    </div>
    {{-- jumbotron end--}}

    {{-- content --}}
    <section class="template" id="templates">
        <div class="container">
            <div class="row justify-content-center txt-template" data-aos="zoom-out">
                    <h1>Which templates you love? <span>pick yours.</span></h1>
            </div>
            <div class="row">
                <div class="col-4 img-template">
                    <img class="img-fluid mb-4 rounded" src="../image/exampletemplate1.jpg" alt="">
                    <span>Template 1</span>
                </div>
                <div class="col-4 img-template">
                    <img class="img-fluid mb-4 rounded img-template" src="../image/exampletemplate2.jpg" alt="">
                    <span>Template 2</span>
                </div>
                <div class="col-4 img-template">
                    <img class="img-fluid mb-4 rounded img-template" src="../image/exampletemplate1.jpg" alt="">
                    <span>Template 3</span>
                </div>
            </div>
        </div>
    </section>
    <section class="features" id="features">
        <div class="container">
            <div class="row justify-content-center txt-template" data-aos="zoom-out">
                <h1>Features <span>& pricing.</span></h1>
            </div>

            <div class="row align-items-center">
                <div class="col-10 col-lg-6 col-xl-5 mb-6 mb-lg-0 px-0 mx-auto mt-6 mt-lg-0" data-aos="fade-right">
                    <div class="position-relative border border-300 p-5">
                        <div class="pb-3">
                            <p class="text-600 font-italic lead text-justify">Think it's too difficult or too expensive? - Think again! Here at Sparrow Weddings, we've delighted hundreds of couples by creating ceremonies full of magical memories that last a lifetime. We're waiting to hear from you!</p>
                            <h4 class="mb-3 mt-3">You will get:</h4>
                            <ul class="text-sans-serif style-check pl-4">
                            <li>Full Wedding Plan</li>
                            <li>Wedding Week in France</li>
                            <li>Wedding Proposal Planning</li>
                            <li>Intimate Ceremony Planning</li>
                            <li>Personal travel assistant</li>
                            </ul>
                        </div>
                        <a class="btn btn-outline-dark btn-grab" style="" href="#">GET IT NOW</a>
                    </div>
                </div>
                <div class="col-10 col-lg-6 col-xl-5 mb-6 mb-lg-0 px-0 mx-auto mt-6 mt-lg-0">
                    <div class="position-relative border border-300 p-5" data-aos="fade-left">
                        <div class="pb-3">
                            <p class="text-600 font-italic lead text-justify">Think it's too difficult or too expensive? - Think again! Here at Sparrow Weddings, we've delighted hundreds of couples by creating ceremonies full of magical memories that last a lifetime. We're waiting to hear from you!</p>
                            <h4 class="mb-3 mt-3">You will get:</h4>
                            <ul class="text-sans-serif style-check pl-4">
                            <li>Full Wedding Plan</li>
                            <li>Wedding Week in France</li>
                            <li>Wedding Proposal Planning</li>
                            <li>Intimate Ceremony Planning</li>
                            <li>Personal travel assistant</li>
                            </ul>
                        </div>
                        <a class="btn btn-outline-dark btn-grab" style="" href="#">GET IT NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portofolio" id="portofolio">
        <div class="container">
            <div class="row justify-content-center txt-template" data-aos="zoom-out">
                    <h1>This is <span>our portofolio.</span></h1>
            </div>
            <div id="carouselExampleControls" class="carousel slide animate-box fadeInUp animated" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active img-item">
                        <img src="../image/exampletemplate1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item img-item">
                        <img src="../image/exampletemplate2.jpg">
                    </div>
                    <div class="carousel-item img-item">
                        <img src="../image/exampletemplate1.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- <div id="myCarousel" class="carousel slide animate-box" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="../image/exampletemplate2.jpg" alt="Los Angeles" style="width:100%;">
                  </div>
                <div class="item">
                    <img src="../image/exampletemplate1.jpg" alt="New york" style="width:100%;">
                </div>
                <div class="item">
                    <img src="../image/exampletemplate2.jpggit" alt="New york" style="width:100%;">
                </div>
            </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div> --}}
    </section>


    {{-- content end --}}

    {{-- footer --}}
    <footer class="full-footer footerend">
        <div class="container-fluid bottom-footer pt-2">
          <div class="row">
            <div class="col-12 text-center">
              <p>Copyrights © 2019 - All rights reserved kundanganyuk <br> powered by Puramedia.id</p>
            </div>
          </div>
        </div>
    </footer>
    {{-- footer end --}}

    <!-- Optional JavaScript -->
    <script src="../js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
