
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : About</title>
    
    <link rel="stylesheet" href="{{ url('css/about.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    
    <style>
      







      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      html, 
      body{
          height: 100%;
          width: 100%;
      }
      #page1{
          height: 100%;
          width: 100%;
          background-color: black;
      }

      #page2{
          height: 100%;
          width: 100%;
          background-color: black;
      }

     
    .row1{
      margin: 2cm;
      display: flex;
      justify-content: space-between;
      overflow: hidden;
    }
    .black-beauty{
      margin: 1cm;
      height: 500px;
      width: 400px;
      box-shadow: 0 0 50px rgba(235,233,233,0.5);
    }
    .row-in-row-img{
      flex-direction: column;
      height: 270px;
      width: 230px;
      margin: 1cm;
      box-shadow: 0 0 50px rgba(235,233,233,0.5);
      justify-content: space-between;
    }
    .para-in-row{
     margin-top: 1cm;
     font-family: "Caveat", cursive;
     flex-direction: row;
     justify-content: space-around;
     margin-left: 0;
     font-size: 15px;
     

    }
    .row{
      text-align: center;
    }
    .pres-sto{
      text-align: center;
      color: white;
      font-size: 60px;
      font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      font-weight: 100;
    }
    .imgs{
      overflow: hidden;
      margin-top: 3cm;
      height: 300px;
      width: 300px;
      box-shadow: 0 0 50px rgba(235,233,233,0.5);

    }
    .third-content{
      text-align: center;
      font-family: "Caveat", cursive; 
      font-size: 15px;
    }
    #div-1{
      width: 100%;
      height: 40%;
      background-color:black;
      
    }
    

   


    </style>
    <style>

      
      .RC-title{
        font-family: fantasy;
      }
      
      .footer-btn{
      background-color:#000000;
      border:none;
      }
      
      .footer-btn:hover{
      background-color:#343434;
      border:none;
      }    
      .footer-btn:active, .footer-btn:focus{
      background-color:#343434;
      border:none;
      }        
      
      .footer-row div{
      padding:10px 0 10px 0;
      }
  
      .flame-container {
        z-index: 1;
        --flame-background:rgb(159, 156, 156);
        display: grid;
        position: relative;
        grid-area: footer;
        min-height: 10rem;
        width: 100%;
      }
  
      .flame-container .flame-flames {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1rem;
        background: var(--flame-background);
        filter: url("#flame");
      }
  
      .flame-container .flame-flames .flame-flame {
        position: absolute;
        left: var(--flame-position, 50%);
        background: var(--flame-background);
        border-radius: 100%;
        animation: flame-flame-size var(--flame-time, 4s) ease-in infinite var(--flame-delay, 0s),
          flame-flame-move var(--flame-time, 4s) ease-in infinite var(--flame-delay, 0s);
        width: var(--flame-size, 4rem);
        height: var(--flame-size, 4rem);
      }
  
      .flame-content {
        z-index: 2;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
        padding-top:10vh;
        background: var(--flame-background);
        color:#000;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 2px;
      }
  
      .flame-content a {
        color:white;
        text-decoration: none;
      }
  
      .flame-content b {
        color: white;
      }
  
      .flame-content p {
        margin: 0;
      }
  
      .flame-content > div {
        flex-basis: 100%;
        flex-grow: 0;
        margin-bottom: 1rem;
      }
  
      .flame-content .row {
        margin: 0;
      }
  
      .flame-content .col {
        padding: 0;
      }
  
      .flame-content .col:first-child {
        padding-right: 1rem;
      }
  
      .flame-content .col:last-child {
        padding-left: 1rem;
      }
  
      .flame-content .form-control {
        width: 100%;
        margin-bottom: 1rem;
      }
  
      @keyframes flame-flame-size {
        0%,
        75% {
          width: var(--flame-size, 4rem);
          height: var(--flame-size, 4rem);
        }
        100% {
          width: 0rem;
          height: 0rem;
        }
      }
  
      @keyframes flame-flame-move {
        0% {
          bottom: -3rem;
        }
        100% {
          bottom: var(--flame-distance, 10rem);
        }
      }
    </style>
    
  </head>
  <body>


    <!-- front page content -->
    <div class="container2">
      <nav class="menu">
        <div class="menu-left menu-item">
          <!-- <span class="menu-link"><a href="./index.html">HOME</a></span>
          <span class="menu-link"><a href="contact.html">CONTACT</a></span> -->
        </div>
        <div class="menu-center menu-item">
          <div class="brand-logo">PRESERVING STORIES , CONNECTING GENERATIONS</div>
        </div>
        <div class="menu-right menu-item">
          <div class="search-icon">
            <ion-icon name="search-sharp"></ion-icon>
          </div>
        </div>
      </nav>
      <div class="images">
        <div class="left img"></div>
        <div class="right img"></div>
      </div>
      <div class="hero-image">
        <div class="wrapper-img">
          <div class="box"></div>
          <div>
            <img class="image" src="https://images.pexels.com/photos/27617235/pexels-photo-27617235/free-photo-of-a-woman-with-curly-hair-posing-for-a-portrait.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" />
          </div>
        </div>
      </div>
      <div class="header"><p class="title"><a href="./Home.html">SEPIA</a></p></div>
      <div class="hero-container">
        <div class="sidebar-text">003</div>
        <div class="projects">projects</div>
        <div class="img-nav">
          <!-- <div class="prev">
            <a href="index2.">Gallery</a>
          </div> -->
          <!-- <div class="next">
            Sepia: Preserving Stories, Connecting Generations

In a world that moves faster each day, our personal and family stories can easily get lost in the rush. At Sepia, we believe that these stories are treasures—each one a thread that weaves the fabric of who we are. Through Sepia, we aim to preserve these precious memories, ensuring they aren't just snapshots of the past but living legacies that inspire future generations.

Why Stories Matter
Our elders have tales that are rich in life lessons, values, and history. By capturing these stories, we not only preserve a family’s unique heritage but also create bridges between the past, present, and future. Whether it's your grandparents' wartime experiences, your parents' tales of childhood adventures, or even your own memories from years gone by, each story helps future generations understand where they come from.

How Sepia Works
Using a blend of technology and heartfelt connection, Sepia makes it easy for families to record, organize, and share their stories. From voice recordings to written anecdotes, old photographs, and even video diaries, Sepia preserves these memories in a beautiful digital archive. This archive is easy to access, easy to share, and meant to grow with each passing year.

Connecting Generations
We live in an era where technology often separates generations. Sepia changes that. By offering a platform that is accessible to both young and old, we foster connection. Grandparents can share their stories, and grandchildren can listen, ask questions, and understand their family's roots in an interactive and meaningful way.

Join Sepia today, and let's start preserving the stories that define us. Together, we’ll ensure that these cherished memories live on, connecting the generations of tomorrow to the legacies of yesterday.


            



            <a href="index (1).html">next</a>
          </div> -->
        </div>
      </div>
    </div>
    <div id="page1"></div>
    <div class="row">
      <h2 class="pres-sto" > Preserving Stories, Connecting Generations
      </h2>
    </div>
    <div  class="row1">
      <img class="black-beauty" src="https://images.pexels.com/photos/2285932/pexels-photo-2285932.jpeg">
      <div class="row-in-row">
        <img class="row-in-row-img" src= "https://images.pexels.com/photos/9588972/pexels-photo-9588972.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
        <img class="row-in-row-img" src="https://images.pexels.com/photos/14677970/pexels-photo-14677970.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
      </div>
      <div class="para-in-row">
        <!-- <h1 class="para1-in-row" >Preserving Stories, Connecting Generations</h1> -->
<h1 style="color: aliceblue;"> In a world that moves faster each day, our personal and family stories can easily get lost in the rush. At Sepia, we believe that these stories are treasures—each one a thread that weaves the fabric of who we are. Through Sepia, we aim to preserve these precious memories, ensuring they aren't just snapshots of the past but living legacies that inspire future generations.
</h1>
      </div>
    </div>
    <div class="row">
      <h2 class="pres-sto">Why Stories Matter</h2>
    </div>
    
    <div  class="row1">
      <div class="para-in-row">
        <!-- <h1 class="para1-in-row" >Preserving Stories, Connecting Generations</h1> -->
<h1 style="color: aliceblue;">Our elders have tales that are rich in life lessons, values, and history. By capturing these stories, we not only preserve a family’s unique heritage but also create bridges between the past, present, and future. Whether it's your grandparents' wartime experiences, your parents' tales of childhood adventures, or even your own memories from years gone by, each story helps future generations understand where they come from.

</h1>
      </div>
      <div class="row-in-row">
        <img class="row-in-row-img" src= "https://images.pexels.com/photos/17001130/pexels-photo-17001130/free-photo-of-woman-in-hoodie-playing-electric-guitar.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
        <img class="row-in-row-img" src="https://images.pexels.com/photos/3769099/pexels-photo-3769099.jpeg?auto=compress&cs=tinysrgb&w=600">
      </div>
      <img class="black-beauty" src="https://images.pexels.com/photos/14123850/pexels-photo-14123850.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
      
    </div>
    <div class="row">
      <h2 class="pres-sto">How Sepia Works</h2>
    </div>
    <div class="row1">
      <img class="imgs" src="https://images.pexels.com/photos/86596/owl-bird-eyes-eagle-owl-86596.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
      <img class="black-beauty" src="https://images.pexels.com/photos/29555790/pexels-photo-29555790/free-photo-of-close-up-of-roaring-lion-in-natural-setting.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
      <img class="imgs" src="https://images.pexels.com/photos/3634929/pexels-photo-3634929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    </div >
    <div class="third-content">
    <h1 style="color: aliceblue;">Using a blend of technology and heartfelt connection,<br> Sepia makes it easy for families to record, organize, and share their stories.<br> From voice recordings to written anecdotes, old photographs, <br>and even video diaries, Sepia preserves these memories in a beautiful digital archive. <br>This archive is easy to access, easy to share, and meant to grow with each passing year.<br><br>Join Sepia today, and let's start preserving the stories that define us. Together, we’ll ensure that these cherished memories live on, connecting the generations of tomorrow to the legacies of yesterday.


    </h1>
    </div>
   <div id="div-1"></div>
  
   
      <footer class="flame-container">
        <div class="flame-flames">
        
        </div>
        <div class="flame-content">
          <div class="container1">
            <div class="row footer-row">
              <div class="col-md-4">
                <h3 class="RC-title">CodeGeeks</h3>
               
                <h6>Email: riay851@gmail.com</h6>
                <h6>Phone: +91 7355005412</h6>
                <h6>Github:Prachi-verma5</h6>
              </div>
              <div class="col-md-4">
                <h6>Follow us on:</h6>
                <h6>
                  <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                </h6>
              </div>
              <div class="col-md-4">
                <h6>Subscribe to our newsletter</h6>
                <div class="input-group">
                  <input type="email" class="form-control" id="placeholderInput" placeholder="">
                  <button class="btn btn-primary footer-btn" type="button">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <hr>
              </div>
            </div>
            <div class="row footer-row">
              <div class="col-md-4">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('about') }}">About Us</a>
                <a href="{{ url('service') }}">Services</a>
                <a href="{{ url('project') }}">Projects</a>
              </div>
              <div class="col-md-4">
                <h6>Privacy Policy</h6>
                <h6>Terms of Service</h6>
              </div>
              <div class="col-md-4">
                <h6>&copy; 2023 RaLeCraft. All rights reserved.</h6>
                <h6>Testimonials</h6>
              </div>
            </div>
            <div class="row footer-row">
              <div class="col-md-12">
                <button id="backToTopBtn" class="btn btn-primary footer-btn" style="display: none;">Back to Top</button>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <svg style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh;">
        <defs>
          <filter id="flame">
            <feTurbulence type="fractalNoise" baseFrequency="0.02" numOctaves="5" result="noise" />
            <feDisplacementMap in="SourceGraphic" in2="noise" scale="80" xChannelSelector="R" yChannelSelector="G" />
          </filter>
        </defs>
      </svg>
        
    

    
    
    
    <!-- front page content ends -->
    
    <script src="{{ url('js/about.js') }}"></script>
    
    <!-- front page content ends -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        var flameFlamesContainer = $('.flame-flames');
  
        for (var i = 0; i < 128; i++) {
          var flameSize = 2 + Math.random() * 4 + 'rem';
          var flameDistance = 6 + Math.random() * 4 + 'rem';
          var flamePosition = -5 + Math.random() * 110 + '%';
          var flameTime = 2 + Math.random() * 2 + 's';
          var flameDelay = -1 * (2 + Math.random() * 2) + 's';
  
          var flameFlame = $('<div></div>').addClass('flame-flame').css('--flame-size', flameSize)
            .css('--flame-distance', flameDistance).css('--flame-position', flamePosition)
            .css('--flame-time', flameTime).css('--flame-delay', flameDelay);
  
          flameFlamesContainer.append(flameFlame);
        }
  
        $(window).scroll(function() {
          if ($(this).scrollTop() > 100) {
            $('#backToTopBtn').fadeIn();
          } else {
            $('#backToTopBtn').fadeOut();
          }
        });
  
        $('#backToTopBtn').click(function() {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
        });
      });
    </script>

    

    

    
    



  </body>
</html>