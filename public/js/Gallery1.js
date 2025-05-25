window.onload = function () {
  const gallery = document.querySelector(".gallery");
  const previewImage = document.querySelector(".preview-img img");

  // Left and right info boxes
  const leftInfoBox = document.querySelector(".left-info");
  const rightInfoBox = document.querySelector(".right-info");

  document.addEventListener("mousemove", function (event) {
    const x = event.clientX;
    const y = event.clientY;

    const centerX = window.innerWidth / 2;
    const centerY = window.innerHeight / 2;

    const percentX = (x - centerX) / centerX;
    const percentY = (y - centerY) / centerY;

    const rotateX = 55 + percentY * 2;
    const rotateY = percentX * 2;

    gsap.to(gallery, {
      duration: 1,
      ease: "power2.out",
      rotateX: rotateX,
      rotateY: rotateY,
      overwrite: "auto",
    });
  });

  // Create gallery items with image and description
  for (let i = 0; i < 150; i++) {
    const item = document.createElement("div");
    item.className = "item";

    const img = document.createElement("img");
    img.src = "./assets/img" + ((i % 15) + 1) + ".jpg";
    img.setAttribute("data-info", "Image #" + ((i % 15) + 1) + " - A stunning capture!");

    item.appendChild(img);
    gallery.appendChild(item);
  }

  const items = document.querySelectorAll(".item");
  const numberOfItems = items.length;
  const angleIncrement = 360 / numberOfItems;

  items.forEach((item, index) => {
    gsap.set(item, {
      rotationY: 90,
      rotationZ: index * angleIncrement - 90,
      transformOrigin: "50% 400px",
    });

    item.addEventListener("mouseover", function () {
      const imgInsideItem = item.querySelector("img");
      previewImage.src = imgInsideItem.src;

      const info = imgInsideItem.getAttribute("data-info");
      if (leftInfoBox) leftInfoBox.textContent = info;
      if (rightInfoBox) rightInfoBox.textContent = "Explore this view in full glory!";

      gsap.to(item, {
        x: 10,
        z: 10,
        y: 10,
        ease: "power2.out",
        duration: 0.5,
      });
    });

    item.addEventListener("mouseout", function () {
      previewImage.src = "./assets/img1.jpg";

      if (leftInfoBox) leftInfoBox.textContent = "Hover over an image to see info.";
      if (rightInfoBox) rightInfoBox.textContent = "Hover over an image to explore more.";

      gsap.to(item, {
        x: 0,
        y: 0,
        z: 0,
        ease: "power2.out",
        duration: 0.5,
      });
    });
  });

  ScrollTrigger.create({
    trigger: "body",
    start: "top top",
    end: "bottom bottom",
    scrub: 2,
    onRefresh: setupRotation,
    onUpdate: (self) => {
      const rotationProgress = self.progress * 360;
      items.forEach((item, index) => {
        const currentAngle = index * angleIncrement - 90 + rotationProgress;
        gsap.to(item, {
          rotationZ: currentAngle,
          duration: 1,
          ease: "power3.out",
          overwrite: "auto",
        });
      });
    },
  });
};

function setupRotation() {}

document.addEventListener("DOMContentLoaded", function () {
  const sepiaButton = document.getElementById("sepiaButton");

  if (sepiaButton) {
    sepiaButton.addEventListener("click", function () {
      console.log("Button Clicked!");
      window.location.href = "./Home.html";
    });
  } else {
    console.error("Button not found!");
  }
});
