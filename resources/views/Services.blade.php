<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Services</title>
    <link rel="stylesheet" href="{{ url('css/Services.css') }}"/>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
    <div class="nav">
      <div class="nav-col">
        <a href="{{ url('/') }}">SEPIA</a>       
      </div>
    </div>
    <div class="header">
      <h1>Bring order to your <br />creative universe</h1>
    <button onclick="openPage()">Choose Categories</button>
    </div>
    <div class="gallery"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script type="module">
      import { items } from "{{ url('js/Services.js') }}";

      const gallery = document.querySelector(".gallery");

      const itemPositions = [
        { top: "-5%", left: "5%" },
        { top: "40%", left: "-5%" },
        { top: "25%", left: "20%" },
        { top: "60%", left: "40%" },
        { top: "70%", left: "10%" },
        { top: "-10%", left: "65%" },
        { top: "10%", left: "85%" },
        { top: "40%", left: "60%" },
        { top: "80%", left: "70%" },
        { top: "50%", left: "95%" },
      ];

      items.forEach((itemData, index) => {
        const item = document.createElement("div");
        item.classList.add("item");

        const position = itemPositions[index];
        item.style.top = position.top;
        item.style.left = position.left;

        const img = document.createElement("img");
        img.src = itemData.img;
        item.appendChild(img);

        const link = document.createElement("div");
        link.classList.add("link");
        link.innerHTML = `<a href="${itemData.link}">${itemData.icon}</a>`;
        item.appendChild(link);

        gallery.appendChild(item);
      });

      document.addEventListener("mousemove", (e) => {
        gallery.querySelectorAll(".item").forEach((item, index) => {
          const animationFactor = items[index].parllaxSpeed;

          const deltaX = (e.clientX - window.innerWidth / 2) * animationFactor;
          const deltaY = (e.clientY - window.innerHeight / 2) * animationFactor;

          gsap.to(item, { x: deltaX, y: deltaY, duration: 0.75 });
        });
      });
    </script>
    <script>
      function openPage() {
          window.location.href = "{{ url('service-in') }}"; // Opens in the same tab
      }
  </script>



  </body>
</html>
