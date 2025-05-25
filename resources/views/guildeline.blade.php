<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sepia : Guidelines</title>
  <link rel="stylesheet" href="{{ url('css/guideline.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="{{ url('/') }}">SEPIA</a></div>
    <ul class="nav-menu">
      <li><a href="#guidelines">Guidelines</a></li>
      <li><a href="#faqs">FAQs</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="{{ url('videos/video3.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        
      <h1>Sepia Creative Ethics</h1>
      <p>Explore the principles that shape our artistry and community.</p>
    </div>
  </section>

  <!-- Guidelines -->
  <section id="guidelines" class="section animated-section">
    <h2>Core Guidelines</h2>
    <div class="guidelines-grid">
      <div class="card guideline-card">
        <h3>Originality</h3>
        <p>We value and celebrate unique, personal expression in all creative work. Avoid imitation and instead showcase authentic voices.</p>
      </div>
      <div class="card guideline-card">
        <h3>Inclusivity</h3>
        <p>Art should be inclusive, open to all communities, cultures, and identities. We strive to reflect diversity in all forms.</p>
      </div>
      <div class="card guideline-card">
        <h3>Ethical Sourcing</h3>
        <p>Use content that is your own or properly licensed. Plagiarism, unauthorized AI-generated content, and stolen media are not tolerated.</p>
      </div>
      <div class="card guideline-card">
        <h3>Respectful Expression</h3>
        <p>Ensure your work respects human dignity. Avoid offensive, violent, or discriminatory content.</p>
      </div>
      <div class="card guideline-card">
        <h3>Constructive Collaboration</h3>
        <p>We encourage feedback, mentoring, and teamwork. Be open to learning and growing with others.</p>
      </div>
      <div class="card guideline-card">
        <h3>Transparency</h3>
        <p>Be honest about your process, inspiration, and sources. Credit others when appropriate.</p>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section id="faqs" class="section animated-section">
    <h2>FAQs</h2>
    <div class="faq-item">
      <div class="faq-question">What is Sepia’s goal?</div>
      <div class="faq-answer">To build a platform where creativity and ethics coexist. We want to empower artists while preserving respect, inclusivity, and fairness.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">Who can join?</div>
      <div class="faq-answer">Anyone with a creative mindset who respects our core principles — from artists and writers to developers and storytellers.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">Is there a review process?</div>
      <div class="faq-answer">Yes. Every submission is reviewed by our moderation team to ensure it aligns with Sepia’s values and aesthetic standards.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">What content is prohibited?</div>
      <div class="faq-answer">We do not allow hate speech, plagiarism, violence, non-consensual imagery, or any discriminatory content.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">Can I collaborate with others?</div>
      <div class="faq-answer">Absolutely. Sepia encourages community collaboration. You can find collaborators through our forums and mentorship channels.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">How can I get featured?</div>
      <div class="faq-answer">Submit your work to our spotlight program. Selection is based on creativity, message clarity, and adherence to guidelines.</div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact" class="footer">
    <p>© 2025 Sepia Collective</p>
    <p>contact@sepia.org | @sepia_collective</p>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="{{ url('js/guideline.js') }}"></script>
</body>
</html>
