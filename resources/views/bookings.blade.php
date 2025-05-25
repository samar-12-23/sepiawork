<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPIA : Bookings</title>
    <link rel="stylesheet" href="{{ url('css/bookings.css') }}" />
  </head>
  <body>
    <nav>
      <div class="nav-items">
        <a href="{{ url('/') }}">SEPIA</a>
        <a href="{{ url('incubators') }}">Incubators</a>
      </div>
      <div class="logo">
        <a href="#"></a>
      </div>
      <div class="nav-items">
        <a href="#">earnings</a>
        <a href="{{ url('contact-us') }}">Contact Us</a>
      </div>
    </nav>


    <div class="container">
      <p>BOOKINGS</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script id="vertexShader" type="x-shader/x-vertex">
      void main() {
          gl_Position = vec4(position, 1.0);
      }
    </script>
    <script id="fragmentShader" type="x-shader/x-fragment">
      uniform vec2 iResolution;
      uniform float iTime;
      uniform float scrollOffset;
      
      void mainImage(out vec4 o, vec2 I) {
          I -= o.zw = iResolution.xy / 2.;
          float t = iTime * 5.0 + scrollOffset * 0.1;
          
          // Generate a grayscale intensity value
          float intensity = sin(atan(I.y, I.x) / 0.1) * sin(20. * (o.w /= length(I)) + t) - 1. + o.w;
          
          // Convert to black & white by clamping the value and using grayscale
          intensity = clamp(intensity, 0.0, 1.0);
          
          o = vec4(vec3(intensity), 1.0); // Grayscale output
      }
      
      void main() {
          mainImage(gl_FragColor, gl_FragCoord.xy);
      }
      
    </script>
    <script>
      const scene = new THREE.Scene();
      const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
      const renderer = new THREE.WebGLRenderer();
      renderer.setSize(window.innerWidth, window.innerHeight);
      document.body.appendChild(renderer.domElement);

      const geometry = new THREE.PlaneGeometry(2, 2);
      const uniforms = {
        iTime: { value: 0 },
        iResolution: {
          value: new THREE.Vector2(window.innerWidth, window.innerHeight),
        },
        scrollOffset: { value: 0 },
      };

      const material = new THREE.ShaderMaterial({
        uniforms: uniforms,
        vertexShader: document.getElementById("vertexShader").textContent,
        fragmentShader: document.getElementById("fragmentShader").textContent,
      });

      const mesh = new THREE.Mesh(geometry, material);
      scene.add(mesh);

      let scrollVelocity = 0;
      const scrollDamping = 0.92;
      const scrollSensitivity = 0.025;

      function handleScroll(event) {
        event.preventDefault();
        scrollVelocity += event.deltaY * scrollSensitivity;
      }

      window.addEventListener("wheel", handleScroll, { passive: false });

      function animate(time) {
        requestAnimationFrame(animate);
        uniforms.iTime.value = time * 0.001;

        uniforms.scrollOffset.value += scrollVelocity;

        scrollVelocity *= scrollDamping;

        renderer.render(scene, camera);
      }

      animate();

      window.addEventListener("resize", onWindowResize, false);

      function onWindowResize() {
        const width = window.innerWidth;
        const height = window.innerHeight;
        renderer.setSize(width, height);
        uniforms.iResolution.value.set(width, height);
      }
      gsap.registerPlugin(ScrollTrigger);

      const totalSlides = 10;
      const zStep = 2500;
      const initialZ = -22500;

      function generateSlides() {
        const slider = document.querySelector(".slider");
        slider.innerHTML = "";

        for (let i = 1; i <= totalSlides; i++) {
          const slide = document.createElement("div");
          slide.className = "slide";
          slide.id = `slide-${i}`;

          const slideImg = document.createElement("div");
          slideImg.className = "slide-img";

          const img = document.createElement("img");
          img.src = `./assets/img${i}.jpg`;
          img.alt = "";

          const slideCopy = document.createElement("div");
          slideCopy.classList.add("slide-copy");
          slideCopy.innerHTML = `<p>${slides[i - 1].title}</p><p>${
            slides[i - 1].id
          }</p>`;

          slideImg.appendChild(img);
          slide.appendChild(slideImg);
          slide.appendChild(slideCopy);
          slider.appendChild(slide);

          const zPosition = initialZ + (i - 1) * zStep;
          const xPosition = i % 2 === 0 ? "30%" : "70%";
          const opacity = i === totalSlides ? 1 : i === totalSlides - 1 ? 0 : 0;

          gsap.set(slide, {
            top: "50%",
            left: xPosition,
            xPercent: -50,
            yPercent: -50,
            z: zPosition,
            opacity: opacity,
          });
        }
      }

      window.addEventListener("load", function () {
        generateSlides();

        const slides = gsap.utils.toArray(".slide");

        function getInitialTranslateZ(slide) {
          return gsap.getProperty(slide, "z");
        }

        function mapRange(value, inMin, inMax, outMin, outMax) {
          return (
            ((value - inMin) * (outMax - outMin)) / (inMax - inMin) + outMin
          );
        }

        ScrollTrigger.create({
          trigger: ".container",
          start: "top top",
          end: "bottom bottom",
          scrub: 1,
          onUpdate: (self) => {
            uniforms.scrollOffset.value = self.progress;
          },
        });

        slides.forEach((slide, index) => {
          const initialZ = getInitialTranslateZ(slide);

          ScrollTrigger.create({
            trigger: ".container",
            start: "top top",
            end: "bottom bottom",
            scrub: 1,
            onUpdate: (self) => {
              const progress = self.progress;
              const zIncrement = progress * 22500;
              const currentZ = initialZ + zIncrement;

              let opacity;
              if (currentZ >= -2500) {
                opacity = mapRange(currentZ, -2500, 0, 0, 1);
              } else {
                opacity = mapRange(currentZ, -5000, -2500, 0, 0);
              }

              slide.style.opacity = opacity;
              slide.style.transform = `translateX(-50%) translateY(-50%) translateZ(${currentZ}px)`;
            },
          });
        });
      });
document.addEventListener("DOMContentLoaded", function () {
    const sepiaButton = document.getElementById("sepiaButton");

    if (sepiaButton) {
        sepiaButton.addEventListener("click", function () {
            console.log("Navigating to Home.html...");
            window.location.href = "./index.html"; // Navigate to Home.html
        });
    } else {
        console.error("❌ Button not found!");
    }
});



    </script>
  </body>
</html>
