<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Portfolios</title>
    <link rel="stylesheet" href="{{ url('css/portfolio3.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="blurry-prev">
        <img src="./assets/img1.jpg" alt="" />
        <div class="overlay"></div>
      </div>

      <div class="col site-info">
        <nav>
          <a href="{{url('/')}}">Home</a>
          <a href="{{url('project')}}">Work</a>
          <a href="{{url('contact-us')}}">Contact</a>
        </nav>
        <div class="header">
          <h1>SEPIA : PortFolios</h1>
        </div>
        <div class="copy">
          <p>
            We are a full-service creative agency delivering innovative design
            solutions for businesses around the globe.
          </p>
        </div>
      </div>

      <div class="col project-preview">
        <div class="project-details">
          <div class="title"><h1>Beyond The Summit</h1></div>
          <div class="info">
            <p>
              Join a team of elite mountaineers as they attempt to conquer K2 in
              winter, a feat never before accomplished. This breathtaking
              documentary captures the raw beauty of the Karakoram and the
              indomitable human spirit.
            </p>
          </div>
          <div class="credits"><p>Credits</p></div>
          <div class="director"><p>Director: Alex Honnold</p></div>
          <div class="cinematographer">
            <p>Cinematographer: Jimmy Chin</p>
          </div>
        </div>

        <div class="project-img">
          <img src="./assets/img1.jpg" alt="" />
        </div>
      </div>

      <div class="gallery-wrapper">
        <div class="gallery"></div>
      </div>
    </div>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script type="module" src="{{url('js/portfolio3.js')}}"></script>
  </body>
</html>
