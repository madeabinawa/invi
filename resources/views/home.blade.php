<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- custom fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Gugi|Roboto+Slab" rel="stylesheet">
    {{-- bootstrap css --}}
    {{ HTML::style('css/app.css') }}
    {{-- custom css --}}
    {{HTML::style('css/style.css')}}


    <title>Kundangan Yuk</title>
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Kundangan Yuk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features & Pricing</a>
                <a class="nav-item nav-link" href="#">About</a>
                <a class="nav-item btn btn-primary tombol" href="#">Purchase</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- navbar end--}}

    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">We bring you the <span>true experience</span><br>in your <span> special moment</span></h1>

        </div>
    </div>
    {{-- jumbotron end--}}

    {{-- content --}}
    <section class="template">
        <div class="container">
            <div class="row justify-content-center txt-template">
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
    <section class="features">
        <div class="container">
            <div class="row justify-content-center txt-template">
                <h1>Fitur dan <span>harga.</span></h1>
            </div>
            {{-- test --}}
            <div class="row align-items-center">
                <div class="col-10 col-lg-6 col-xl-5 mb-6 mb-lg-0 px-0 mx-auto mt-6 mt-lg-0">
                    <div class="position-relative border border-300 pb">
                        <div class="py-6 px-5 px-lg-7 px-xl-8">
                            <p class="text-600 font-italic lead">Think it's too difficult or too expensive? - Think again! Here at Sparrow Weddings, we've delighted hundreds of couples by creating ceremonies full of magical memories that last a lifetime. We're waiting to hear from you!</p>
                            <h4 class="mb-3 mt-5">You will get:</h4>
                            <ul class="text-sans-serif style-check pl-0">
                            <li>Full Wedding Plan</li>
                            <li>Wedding Week in France</li>
                            <li>Wedding Proposal Planning</li>
                            <li>Intimate Ceremony Planning</li>
                            <li>Personal travel assistant</li>
                            </ul>
                            <a class="btn btn-outline-dark pb" href="#">get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- test end --}}
        </div>
    </section>


    {{-- content end --}}

    {{-- footer --}}
    <div class="end">
        <div class="container">
            <div class="col">
                <p>2019 All Right Reserved by kundanganyuk</p>
            </div>
        </div>
    </div>
    {{-- footer end --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
