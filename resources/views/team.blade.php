<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEPIA : Team</title>
  <link rel="stylesheet" href="{{ url('css/team.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ url('/') }}">Sepia</a></div>
        <div class="navbar">
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('team') }}">Our Team</a>
          <a href="{{ url('contact') }}">Contact</a>
        </div>
    </header>

  <section class="team-introduction">
    <h1>Meet Our Amazing Team</h1>
    <p>Our team is dedicated to excellence, innovation, and delivering success. Get to know the passionate professionals behind our work.</p>
  </section>

  <section class="team-members" id="team">
    <div class="team-member" data-scroll>
      <img src="{{ url('images/img-1.jpg') }}" alt="John Doe">
      <h3>Riya Yadav</h3>
      <p>CEO & Founder</p>
      <p>John leads with vision, inspiring the team with his strategic insights and passion for technology.</p>
      <div class="skills">
        <p><strong>Skills:</strong> Leadership, Strategy, Innovation</p>
      </div>
      <div class="contact-links">
        <a href="mailto:john@example.com">Email</a>
        <a href="https://linkedin.com/in/johndoe" target="_blank">LinkedIn</a>
      </div>
    </div>
  
    <div class="team-member" data-scroll>
      <img src="{{ url('images/img-2.jpg') }}" alt="Jane Smith">
      <h3>Samar Gupta</h3>
      <p>CEO & Founder</p>
      <p>Jane is a tech visionary, leading the development of cutting-edge solutions with a focus on scalability.</p>
      <div class="skills">
        <p><strong>Skills:</strong> Technology, Architecture, Problem-Solving</p>
      </div>
      <div class="contact-links">
        <a href="mailto:jane@example.com">Email</a>
        <a href="https://linkedin.com/in/janesmith" target="_blank">LinkedIn</a>
      </div>
    </div>
  
    <div class="team-member" data-scroll>
      <img src="{{ url('images/img-3.jpg') }}" alt="Emily Clark">
      <h3>Prachi Verma</h3>
      <p>CEO & Founder</p>
      <p>Emily ensures smooth operations across all departments and drives efficiency in our daily processes.</p>
      <div class="skills">
        <p><strong>Skills:</strong> Operations, Management, Communication</p>
      </div>
      <div class="contact-links">
        <a href="mailto:emily@example.com">Email</a>
        <a href="https://linkedin.com/in/emilyclark" target="_blank">LinkedIn</a>
      </div>
    </div>
  </section>
  

  <footer class="dynamic-footer">
    <div class="footer-container">
      <div class="footer-links">
        <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
      </div>
      <div class="footer-info">
        <p>&copy; 2025 Our Team. All rights reserved.</p>
        
        <p id="extraInfo" style="display: none;">We are constantly growing and innovating, connecting the best talent with meaningful opportunities.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
  <script src="{{ url('js/team.js') }}"></script>
</body>
</html>
