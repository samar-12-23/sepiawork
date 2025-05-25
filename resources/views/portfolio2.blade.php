<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Portfolios</title>
    <link rel="stylesheet" href="{{ url('css/portfolio2.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="revealers">
        <div class="revealer r-1"></div>
        <div class="revealer r-2"></div>
      </div>

      <div class="images">
        <div class="img"><img src="./assets/img1.jpeg" alt="" /></div>
        <div class="img"><img src="./assets/img2.jpeg" alt="" /></div>
        <div class="img"><img src="./assets/img3.jpeg" alt="" /></div>
        <div class="img"><img src="./assets/img4.jpeg" alt="" /></div>
        <div class="img"><img src="./assets/img5.jpeg" alt="" /></div>
        <div class="img main"><img src="./assets/img6.jpeg" alt="" /></div>
        <div class="img main"><img src="./assets/img7.jpeg" alt="" /></div>
        <div class="img main"><img src="./assets/img8.jpeg" alt="" /></div>
      </div>

      <div class="hero-content">
        <div class="site-logo">
          <div class="word">
            <h1>Arc</h1>
          </div>
          <div class="word">
            <h1>Worldwide<sup>&copy;</sup></h1>
          </div>
        </div>

        <div class="nav">
          <div class="nav-item">
            <p> <a href="{{url('about')}}"> About </a></p>
          </div>
          <div class="nav-item">
            <p>Work</p>
          </div>
          <div class="nav-item">
            <p>Journal</p>
          </div>
          <div class="nav-item">
            <p><a href="{{url('contact-us')}}"> Contact</a></p>
          </div>
        </div>

        <div class="team-img">
          <img src="./assets/img3.jpeg" alt="" />
        </div>

        <div class="site-info">
          <div class="row">
            <div class="col">
              <div class="line"><p>Featured Works</p></div>
            </div>
            <div class="col">
              <h2>
                Arc is a contemporary fashion brand redefining elegance with
                timeless designs and innovative aesthetics.
              </h2>
            </div>
          </div>

          <div class="row">
            <div class="col"></div>
            <div class="col">
              <div class="address">
                <div class="line"><p>Arc Studio</p></div>
                <div class="line"><p>Riverstone Building</p></div>
                <div class="line"><p>- 28 Orchard Lane</p></div>
                <div class="line"><p>N1 4DX</p></div>
              </div>

              <div class="socials">
                <div class="line"><p>SayHi@Arc.com</p></div>
                <br />
                <div class="line"><p>Instagram</p></div>
                <div class="line"><p>LinkedIn</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="{{url('js/portfolio2.js')}}"></script>
  </body>
</html>
