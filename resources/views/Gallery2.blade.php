<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Arcade</title>
    <link rel="stylesheet" href="{{ url('css/Gallery2.css') }}">
  </head>
  <body>
    <div class="nav">
      <div class="nav-col">
        <a href="{{ url('/') }}">SEPIA</a>
       
      </div>
      <div class="nav-col">
        <a href="{{ url('treasures') }}">Treasures</a>
      </div>
    </div>

    <div class="footer">
      <a href="{{ url('booking') }}">Bookings</a>
      <a>Earnings</a>
    </div>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="{{url('js/Gallery2.js')}}"></script>
  </body>
</html>
