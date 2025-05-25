<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Incubators</title>
    <link rel="stylesheet" href="{{ url('css/incubators.css') }}"/>
  </head>
  <body>
    <div class="cursor"></div>

    <nav>
      <a href="{{ url('/') }}">SEPIA</a>
      <a href="{{ url('booking') }}">BOOKINGS</a>
    </nav>

    <footer>
      <div class="links">
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
      </div>
      <p>EARNINGS</p>
    </footer>

    <div class="container">
      <div class="gallery"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script type="module" src="{{url('js/data.js')}}"></script>
    <script>
    window.baseUrl = "http://127.0.0.1:8000";
    </script>
    <script type="module" src="{{url('js/incubators.js')}}"></script>
  </body>
</html>
