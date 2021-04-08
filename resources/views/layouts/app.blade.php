<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
      h1 {
        color: white;
        text-align: center;
      }
      #background {
        background-image: url(../images/wires.jpg);background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: absolute;
        top:0px;
        left:0px;
        width: 100%;
        height: 100%;
      }
      #aboutMe {
        padding-top: 80px;
      }
      #projects {
        padding-top: 80px;
      }
    </style>


    <!-- Styles -->
    <link href="css/override.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="background" style="">
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent flex-column">
    <div class="container">
      <div class="mb-12 w-100 d-flex">
        <a class="navbar-brand mx-auto" href="#"><h1> My Portfolio </h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="mb-12 d-flex mx-auto">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav text-center">
            <li class="nav-item" style="width: 400px;">
              <a class="nav-link active" aria-current="page" href="#">About Me</a>
            </li>
            <li class="nav-item" style="width: 400px;">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item" style="width: 400px;">
              <a class="nav-link" href="#">CV</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main class="py-4">
      @yield('content')
  </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</div>
</body>
</html>
