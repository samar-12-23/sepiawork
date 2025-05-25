<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPIA : Categories</title>
    <link rel="stylesheet" href="{{ url('css/service-in.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <script src="{{url('js/service-in.js')}}" defer></script>
    <!-- defer tells the browser to wait until the page has finished parsing before executing the script  -->
</head>
<body>
    <div class="lightbox">
        <div class="wrapper">
            <header>
                <div class="photographer">
                    <i class="uil uil-camera"></i>
                       <span></span>
                   </div>
                  <div class="buttons">
                    <i class="uil uil-import"></i>
                    <i class="uil uil-times"></i>
                  </div>
               
            </header>
            <div class="preview-img">
                <div class="img"><img src="" alt="preview-img"></div>
            </div>
        </div>
    </div>
    <section class="search">
        <video autoplay muted loop>
            <source src="hero-content/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <h1> SEPIA : Find the Perfect Category</h1>
            <p>Search and explore images from various categories</p>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search images">
            </div>

        </div>
    </section>
    <section class="gallery">
        <ul class="images"></ul>
        <button class="load-more">Load More</button>
    </section>
    
</body>
</html>