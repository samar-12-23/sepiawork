<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPIA: Preserving Stories , Connecting Generations</title>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/Home.css') }}">
</head>
<body>
    <div class="site-content">
        <video autoplay muted loop id="heroVideo">
            <source src="./hero-content/hero.mp4" type="video/mp4"/>
        </video>
    </div>
    <div class="container">
        <div class="nav">
            <div class="logo">
                <a href="{{ url('/')}}">Sepia</a>
            </div>
            <div class="links">
                <div class="dropdown">
                    <a href="{{ url('gallery') }}">Gallery</a>
                    <div class="dropdown-content">
                        <a href="{{ url('arcade') }}">ARCADE</a>
                        <a href="{{ url('treasures') }}">TREASURES</a>
                        <a href="{{ url('classic') }}">CLASSIC CAPTURES</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a >Projects</a>
                    <div class="dropdown-content">
                        <a href="{{  url('project') }}">Current</a>
                        <a href="#">Archived</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a >About Us</a>
                    <div class="dropdown-content">
                        <a href="{{ url('about') }}">Our Story</a>
                        <a href="{{ url('team') }}">Team</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a >Our Services</a>
                    <div class="dropdown-content">
                        <a href="#">Editing</a>
                        <a href="{{ url('service') }}">Preservation</a>
                        <a href="{{ url('Ai-generation') }}">AI Features</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a >Our Incubators</a>
                    <div class="dropdown-content">
                        <a href="{{ url('incubators') }}">Partners</a>
                        <a href="{{url('collaborators')}}">Collaborators</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a >Contact</a>
                    <div class="dropdown-content">
                        <a href="{{ url('email') }}">Email</a>
                        <a href="{{ url('contact-us') }}">Support</a>
                    </div>
                </div>
            
                <div class="dropdown">
                    <a href="#">Collab</a>
                    <div class="dropdown-content">
                        <a href="{{ url('collab') }}">Submit</a>
                        <a href="{{ url('guildeline') }}">Guidelines</a>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="hero-copy">
            <h1>SEPIA</h1>
            <p>PRESERVING STORIES , CONNECTING GENERATIONS</p>
        </div>
        <div class="footer">
            <div class="cta">
                <a href="{{ url('earnings')}}">Earnings</a>

            </div>
            <div class="links">
                <a href="#"><img src="./hero-content/icons8-instagram-24.png"  class="jump-icon instagram-icon"></a>
                <a href="#"><img src="./hero-content/icons8-linkedin-24.png"  class="jump-icon instagram-icon"></a>
                <a href="#"><img src="./hero-content/icons8-github-24.png"  class="jump-icon instagram-icon"></a>
            </div>
            <div class="cta">
                <a href="{{ url('booking') }}">Bookings</a>
`
                <!-- <a href="./Bookings-sepia/cg-cosmos-parallax-effect-mousemove/index.html">Earnings</a> -->

            </div>
        
    </div>
    

    </div>
    <canvas id="draw"></canvas>

    <script src="./Home.js"></script>
</body>
</html>
