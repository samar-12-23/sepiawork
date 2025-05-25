<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Galleries</title>
    <link rel="stylesheet" href="{{ url('css/Gallery1.css') }}">
  </head>
  <body>
    <nav>
      <a href="{{ url('/')}}">SEPIA</a>
      <a href="{{ url('arcade') }}">Arcade</a>
    </nav>

    <footer>
      <div class="links">
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
      </div>
      <p>EARNINGS</p>
    </footer>

    <!-- <nav>
      <a href='./Home.html'>SEPIA</a>
      <p>Subscribe &nbsp;&nbsp;&nbsp Instagram &nbsp;&nbsp;&nbsp Twitter</p>
    </nav>
    <footer>
      <p>Unlock Source Code with PRO</p>
      <p>Link In Description</p>
    </footer> -->

    <div class="image-info left-info">Hover over an image to see info.</div>
    <div class="preview-img">
      <img src="./assets/img1.jpg" alt="" />
    </div>
    <div class="image-info right-info">Hover over an image to see info.</div>

    <div class="container">
      <div class="gallery"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script src="{{url('js/Gallery1.js')}}"></script>
  </body>
</html>
