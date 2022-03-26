<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../style/slider.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>HORSEMAN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link rel="icon" href="../../images/bg/favicon.png" type="image/x-icon">

    <!-- slider  -->

    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- fonts  -->
</head>

<body>
    </head>

    <body>


<header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light pl-5">
        <a class="" href="{{url('/land')}}"><img src="/images/bg/hlogo.png" alt="Logo" class="img-fluid" height="50%" width="50%" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:20%">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active mt-2">
      <a class="nav-link active" href="{{url('/land')}}">Home</a>
      </li>
      <li class="nav-item mt-2">
      <a class="nav-link" href="{{url('/all-club')}}">Clubs</a>
      </li>
      <li class="nav-item mt-2">
      <a class="nav-link" href="{{url('/all-provider')}}"> Providers</a>
      </li>
      <li class="nav-item mt-2">
      <a class="nav-link" href="{{url('all-categories')}}">Categories</a>
      </li>
      @guest
                        <div class="d-flex">
                            <button class="btn "  type="button">
                                <a href="{{url('register')}}" class="link-deco">Register</a>
                            </button>

                            <button class="btn ">
                                 <a href="{{url('login')}}" class="link-deco2">Login</a>
                                </button>
                        </div>
                        @else

                        <div class="d-flex">
                            <button class="btn "  type="button">
                                <a href="{{url('manage')}}" class="link-deco">AddPost</a>
                            </button>

                            <button class="btn ">
                            <a class="link-deco"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
                                </button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>


                        @endguest
    </ul>

  </div>
</nav>

</header>


<main>


        @yield('content')

</main>

        <footer class="footer-distributed">

<div class="footer-left">

<a class="" href="{{url('/land')}}"><img src="/images/bg/LGUU.png" alt="Logo" class="img-fluid" height="50%" width="50%" /></a>
    <p class="footer-links">
        <a href="{{url('/land')}}">Home</a>
        ·
        <a href="{{url('/all-club')}}">Clubs</a>
        ·
        <a href="{{url('/all-provider')}}">Providers</a>
        ·
        <a href="{{url('/all-categories')}}">Categories</a>
        ·
        @guest
        <a href="{{url('register')}}" >Register</a>
         ·
          <a href="{{url('login')}}" >Login</a>
         @else
         <a  href="{{url('manage')}}">AddPost</a>
         .
        <a  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
    </p>

    <p class="footer-company-name">HORSEMAN &copy; 2022</p>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>21 Zeryab Street</span> Amman, Jordan</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+1 555 123456</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the company</span>
        This site has been created to facilitate access to places specialized in training horse riding and places that sell horse supplies located in Jordan.
             They are displayed on this site in an easy and simple way to help the user access them in the shortest possible time.

    </p>

    <!-- <div class="footer-icons">


        <a href="#">  <i class="fa fa-phone"></i></a>
        <a href="#"> <i class="fa fa-phone"></i></a>
        <a href="#"><i  class="fa fa-link" aria-hidden="true" > </i></a>
        <a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a>

    </div> -->

</div>

</footer>


        <script>
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
            });
        </script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="java/index.js"></script>
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
