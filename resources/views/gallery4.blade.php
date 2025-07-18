<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Classic Captures</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="{{ url('css/gallery4.css') }}">
  </head>
  <body>
    <div class="logo">
      <a href="{{ url('/') }}">SEPIA</a>
    </div>

    <div class="pads">
      <button id="zoom-out" class="active">
        <svg
          width="18"
          height="18"
          viewBox="0 0 18 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M7.5 14c3.5899 0 6.5-2.9101 6.5-6.5C14 3.91015 11.0899 1 7.5 1 3.91015 1 1 3.91015 1 7.5 1 11.0899 3.91015 14 7.5 14Z"
            stroke="#fff"
          ></path>
          <path d="M10 7.5H5" stroke="#fff" stroke-miterlimit="10"></path>
          <path d="M16.9 17 12 12.2" stroke="#fff"></path>
        </svg>
      </button>
      <button id="zoom-in">
        <svg
          width="18"
          height="18"
          viewBox="0 0 18 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M7.5 14c3.5899 0 6.5-2.9101 6.5-6.5C14 3.91015 11.0899 1 7.5 1 3.91015 1 1 3.91015 1 7.5 1 11.0899 3.91015 14 7.5 14Z"
            stroke="#fff"
          ></path>
          <path
            d="M10 7.5H5M7.5 10V5"
            stroke-miterlimit="10"
            stroke="#fff"
          ></path>
          <path d="M16.9 17 12 12.2" stroke="#fff"></path>
        </svg>
      </button>
    </div>

    <div id="drag-layer"></div>

    <div class="container">
      <div class="gallery"></div>
    </div>
    <script src="{{url('js/gallery4.js')}}"></script>
  </body>
</html>
