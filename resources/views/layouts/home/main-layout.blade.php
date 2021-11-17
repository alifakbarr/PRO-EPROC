<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----FONT GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">  

    <!------CSS-->
    <link href="{{asset('template/css/front.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
  </head>


  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <!--------- NAVBAR-------------->
  <div class="row container-fluid">
    <div class="col-6">Logo</div>
    <div class="col-6">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-white active" aria-current="page" href="{{ route('home.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-white" href="{{ route('home.about') }}">Tentang E-Proc</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-white" href="{{ route('home.tataCara') }}">Tata Cara</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-white" href="{{ route('home.faq') }}">FAQ's</a>
              </li>
              <li class="nav-item dropdown">
                @auth
                <a class="nav-link text-decoration-none text-white" href="{{ route('login') }}">
                  Login
                </a>
                @else
                <a class="nav-link text-decoration-none text-white" href="{{ route('login') }}">
                  Logout
                </a>
                @endauth
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
</div>
@yield('content')
 <!--------- FOOTER-------------->
<div class="row container-fluid">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
      </div>
    </nav>
</div>



    
</body>
</html>