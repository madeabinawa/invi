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


    <title>Wedding Time</title>
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Wedding Time</a>
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
    {{-- content end --}}

    {{-- footer --}}
    <div class="footer">
        <div class="container">
            <div class="col">
                <p>2019 All Right Reserved by Wedding Time</p>
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
