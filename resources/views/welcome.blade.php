<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel Forum</title>
      <link rel="stylesheet" href="{{ asset('asset/main.css')}}">
      <script src="{{ asset('asset/lory.min.js')}}"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css' rel='stylesheet'>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js'></script>
      <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
</head>
<body>
<nav class='navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar'>
    <div class='container'>
      <a class='navbar-brand text-primary' href='#'><strong>Laravel Forum</strong></a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
        aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item'>
                <a class='nav-link text-primary' href='{{ route('login')}}'>Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="carousel js-carousel">
            <figure class="carousel__frame js-carousel__frame">
                  <div class="carousel__slides js-carousel__slides">
                        <img src="{{ asset('asset/image1.jpg')}}" class="carousel__item" />
                        <img src="{{ asset('asset/image2.jpg')}}" class="carousel__item" />
                        <img src="{{ asset('asset/image3.jpg')}}" class="carousel__item" />
                        <img src="{{ asset('asset/image4.jpg')}}" class="carousel__item" />
                        <img src="{{ asset('asset/image5.jpg')}}" class="carousel__item" />

                  </div>

                  <button class="carousel__prev js-carousel__prev">
                        <i class="fas fa-chevron-left"></i>
                        </button>
                  <button class="carousel__next js-carousel__next">
                        <i class="fas fa-chevron-right"></i>
                  </button>

            </figure>
      </div>

      <script type="text/javascript">

      document.addEventListener('DOMContentLoaded', function() {
      run();
      });

      function run() {
            var slider = document.querySelector('.js-carousel');
            lory(slider, {
            infinite: 1,
            enableMouseEvents: true,
            classNameFrame: 'js-carousel__frame',
            classNameSlideContainer: 'js-carousel__slides',
            classNamePrevCtrl: 'js-carousel__prev',
            classNameNextCtrl: 'js-carousel__next',
            });
      }

      </script>
      <footer class='page-footer font-small black'>

<!-- Copyright -->
      <div class='footer-copyright text-center py-3'>© 2019 Copyright:
      <a href='https://github.com/renaldyhidayatt/'> Renaldy Github</a>
      </div>
<!-- Copyright -->

      </footer>
<!-- Footer -->
</body>
</html>
