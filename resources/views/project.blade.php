<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Projects</title>
    <link rel="stylesheet" href="{{ url('css/project.css') }}">
  </head>
  <body>
    <section class="intro" style="position: relative; overflow: hidden; height: 100vh;">
      <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="{{ url('videos/video3.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    
      <div class="nav">
        <div class="nav-col">
          <a href="{{ url('/') }}">SEPIA</a>
        </div>
      </div>
    
      <div class="container" style="text-align: center; padding: 2rem; color: white;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Welcome to SEPIA Projects</h1>
        <p style="max-width: 600px; margin: 0 auto;">Explore a world of creativity and innovation captured in every frame. Start your journey now.</p>
        <a href="#work"  class="btn-start" style="margin-top: 1.5rem; display: inline-block; padding: 0.8rem 1.5rem; background-color: rgba(255, 255, 255, 0.9); color: black; border-radius: 5px; text-decoration: none;">Explore Projects</a>
      </div>
    </section>
    
    

    <section class="work"  id="work">
      <div class="text-container"></div>
      <div class="cards">
        <div class="card">
          <div class="card-img"><img src="./assets/img1.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Eclipse Horizon</p>
            <p>739284</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img2.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Vision Link</p>
            <p>385912</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img3.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Iron Bond</p>
            <p>621478</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img4.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Golden Case</p>
            <p>839251</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img5.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Virtual Space</p>
            <p>456732</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img6.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Smart Vision</p>
            <p>974315</p>
          </div>
        </div>
        <div class="card">
          <div class="card-img"><img src="./assets/img7.jpg" alt="" /></div>
          <div class="card-copy">
            <p>Desert Tunnel</p>
            <p>682943</p>
          </div>
        </div>
      </div>
    </section>

    <section class="outro" style="position: relative; overflow: hidden; height: 60vh; text-align: center; display: flex; align-items: center; justify-content: center;">
      <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="{{ url('videos/video3.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    
      <div style="color: white; z-index: 1; padding: 2rem;">
        <h1 style="font-size: 2.2rem;">Thank You for Visiting SEPIA</h1>
        <p style="max-width: 600px; margin: 0 auto;">We hope our journey inspired yours. Stay in touch and follow us for more creative stories.</p>
        <a href="{{ url('/contact-us') }}" style="margin-top: 1.5rem; display: inline-block; padding: 0.8rem 1.5rem; background-color: rgba(255, 255, 255, 0.9); color: black; border-radius: 5px; text-decoration: none;">Contact Us</a>
      </div>
    </section>
    
    

    <!-- ✅ Footer Section -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-col left">
          <h2>SEPIA</h2>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col middle">
          <h3>Resources</h3>
          <ul>
            <li><a href="{{ url('/videos') }}">Videos</a></li>
            <li><a href="{{ url('/photos') }}">Photos</a></li>
            <li><a href="{{ url('/gifs') }}">GIFs</a></li>
          </ul>
        </div>

        <div class="footer-col right">
          <h3>Contact</h3>
          <p>Email: contact@sepia.com</p>
          <div class="social-icons">
            <a href="#"><img src="{{ url('hero-content/icons8-linkedin-24.png') }}" alt="LinkedIn" /></a>
            <a href="#"><img src="{{ url('hero-content/icons8-github-24.png') }}" alt="GitHub" /></a>
            <a href="#"><img src="{{ url('hero-content/icons8-instagram-24.png') }}" alt="Instagram" /></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 SEPIA. All rights reserved.</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="{{ url('js/project.js') }}"></script>
  </body>
</html>
