<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Collaborators</title>
    <link rel="stylesheet" href="{{url('css/styles.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"></script>
  </head>
  <body>
    <div class="cursor">
      <img src="{{url('new_assets/cursor.png')}}" alt="" />
    </div>
    <div class="content">
      <div class="header">
        <h1>SEPIA : Collaborators</h1>
        <p>Dope into SEPIA</p>
      </div>
    </div>
    <div class="container">
      <div class="gallery">
        <div class="block block-1"></div>
        <div class="block block-2"></div>
        <div class="block block-3"></div>
        <div class="block block-4"></div>
        <div class="block block-5"></div>
        <div class="block block-6"></div>
        <div class="block block-7"></div>
        <div class="block block-8"></div>
        <div class="block block-9"></div>
        <div class="block block-10"></div>
        <div class="block block-11"></div>
        <div class="block block-12"></div>
        <div class="block block-13"></div>
        <div class="block block-14"></div>
        <div class="block block-15"></div>
        <div class="block block-16"></div>
        <div class="block block-17"></div>
        <div class="block block-18"></div>
        <div class="block block-19"></div>
        <div class="block block-20"></div>
        <div class="block block-21"></div>
        <div class="block block-22"></div>
        <div class="block block-23"></div>
        <div class="block block-24"></div>
      </div>
    </div>
    <script>
      const cursor = document.querySelector(".cursor");
      document.body.addEventListener("mousemove", onMouseMove);

      function onMouseMove(e) {
        gsap.to(cursor, 0.0125, {
          x: e.pageX - 5,
          y: e.pageY - 5,
        });
      }

      let blocks = document.querySelectorAll(".block");
      let duration = 0.25;
      let stagger = duration;
      let repeatDelay = 0.075 * (blocks.length - 1);

      gsap.from(".block", 5, {
        scale: 0,
        top: "50%",
        left: "50%",
        transform: "translateZ(-200px)",
        stagger: {
          each: duration,
          repeat: -1,
          repeatDelay: repeatDelay,
        },
      });

      let previousGif = null;

      blocks.forEach((block) => {
        block.addEventListener("click", (event) => {
          const x = event.clientX;
          const y = event.clientY;

          if (previousGif) {
            previousGif.remove();
          }

          const gif = document.createElement("img");
          gif.src = "{{url('new_assets/explosion.gif')}}";
          gif.style.position = "absolute";
          gif.style.left = `${x - 10}px`;
          gif.style.top = `${y - 10}px`;
          gif.style.transform = `scale(2.5)`;
          gif.style.pointerEvents = "none";

          document.body.appendChild(gif);

          setTimeout(() => {
            gif.src = "";
          }, 500);

          previousGif = gif;

          block.style.display = "none";
          setTimeout(() => {
            block.style.display = "block";
          }, 5000);
        });
      });
    </script>
  </body>
</html>
