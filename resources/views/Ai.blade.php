<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : AI</title>
    <link rel="stylesheet" href="{{ url('css/Ai.css') }}" />
  </head>
  <body>
    <h1>Sepia Ai</h1>

    <div class="container">
      <div class="cosmos">
        <div class="cosmos-item">
          <img src="./images/img1.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img2.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img3.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img4.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img5.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img6.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img7.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img8.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img9.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img10.jpg" alt="" />
        </div>
      </div>
      <div class="cosmos">
        <div class="cosmos-item">
          <img src="./images/img11.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img12.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img13.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img14.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img15.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img16.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img17.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img18.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img19.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img20.jpg" alt="" />
        </div>
      </div>

      <div class="cosmos">
        <div class="cosmos-item">
          <img src="./images/img10.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img9.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img8.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img7.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img6.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img5.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img4.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img3.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img2.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img1.jpg" alt="" />
        </div>
      </div>

      <div class="cosmos">
        <div class="cosmos-item">
          <img src="./images/img20.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img19.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img18.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img17.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img16.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img15.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img14.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img13.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img12.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img11.jpg" alt="" />
        </div>
      </div>

      <div class="cosmos">
        <div class="cosmos-item">
          <img src="./images/img11.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img12.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img13.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img14.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img15.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img16.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img17.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img18.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img19.jpg" alt="" />
        </div>
        <div class="cosmos-item">
          <img src="./images/img20.jpg" alt="" />
        </div>
      </div>
    </div>
    <script>
      window.onload = function () {
        let cosmos = document.querySelectorAll(".cosmos");
        let total = cosmos.length;
        let container = document.querySelector(".container");

        for (let i = 0; i < total; i++) {
          let angle = (360 / total) * i;
          let transform = `rotate(${angle}deg) translate(55vh)`;
          cosmos[i].style.transform = transform;
          let cosmosItems = cosmos[i].querySelectorAll(".cosmos-item");

          for (let j = 0; j < cosmosItems.length; j++) {
            cosmosItems[j].style.animationDelay = `${j * 0.5}s`;
          }
        }
      };
    </script>
   
  </body>
</html>
