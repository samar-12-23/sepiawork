// import { interiors } from "./data.js";

// document.addEventListener("DOMContentLoaded", function () {
//   const cursor = document.querySelector(".cursor");
//   const gallery = document.querySelector(".gallery");
//   const numberOfItems = 60;
//   const radius = 1100;
//   const centerX = window.innerWidth / 2;
//   const centerY = window.innerHeight / 2;
//   const angleIncrement = (2 * Math.PI) / numberOfItems;

//   for (let i = 0; i < numberOfItems; i++) {
//     const item = document.createElement("div");
//     item.className = "item";
//     const p = document.createElement("p");
//     const count = document.createElement("span");
//     p.textContent = interiors[i].name;
   
    
//     let button = document.createElement("button");
       
//         button.innerHTML = "&nbsp;&nbsp;&nbsp;click here" // Set button text
//         button.style.fontSize = "16px";
//         button.style.cursor = "pointer"; 
//         button.style.border = "2px solid black"; 
//         button.style.backgroundColor = "black"; // Black background
//         button.style.color = "white";
//         button.onclick = function() {
//             window.location.href = ""; // Opens in the same tab
//             // window.open("https://www.example.com", "_blank"); // Opens in a new tab
//         };

//         // Append the button to the body
//         document.body.appendChild(button);



//     count.textContent = `(${Math.floor(Math.random() * 50) + 1})`;
//     item.appendChild(p);
//     p.appendChild(button);

//     // p.appendChild(count);
//     gallery.appendChild(item);

//     const angle = i * angleIncrement;
//     const x = centerX + radius * Math.cos(angle);
//     const y = centerY + radius * Math.sin(angle);
//     const rotation = (angle * 180) / Math.PI;

//     gsap.set(item, {
//       x: x + "px",
//       y: y + "px",
//       rotation: rotation,
//     });

//     item.addEventListener("mouseover", function () {
//       const imgSrc = `./assets/img${i + 1}.jpg`;
//       const img = document.createElement("img");
//       img.src = imgSrc;
//       img.style.clipPath = " polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)";
//       cursor.appendChild(img);

//       gsap.to(img, {
//         clipPath: "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
//         duration: 1,
//         ease: "power3.out",
//       });
//     });

//     item.addEventListener("mouseout", function () {
//       const imgs = cursor.getElementsByTagName("img");
//       if (imgs.length) {
//         const lastImg = imgs[imgs.length - 1];
//         Array.from(imgs).forEach((img, index) => {
//           if (img !== lastImg) {
//             gsap.to(img, {
//               clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
//               duration: 1,
//               delay: 0.5,
//               ease: "power3.out",
//               onComplete: () => {
//                 setTimeout(() => {
//                   img.remove();
//                 }, 1000);
//               },
//             });
//           }
//         });

//         gsap.to(lastImg, {
//           clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
//           duration: 1,
//           ease: "power3.out",
//           delay: 0.25,
//         });
//       }
//     });
//   }

//   function updatePosition() {
//     const scrollAmount = window.scrollY * 0.0001;
//     document.querySelectorAll(".item").forEach(function (item, index) {
//       const angle = index * angleIncrement + scrollAmount;
//       const x = centerX + radius * Math.cos(angle);
//       const y = centerY + radius * Math.sin(angle);
//       const rotation = (angle * 180) / Math.PI;

//       gsap.to(item, {
//         duration: 0.05,
//         x: x + "px",
//         y: y + "px",
//         rotation: rotation,
//         ease: "elastic.out(1,0.3)",
//       });
//     });
//   }

//   updatePosition();
//   document.addEventListener("scroll", updatePosition);

//   document.addEventListener("mousemove", function (e) {
//     gsap.to(cursor, {
//       x: e.clientX - 150,
//       y: e.clientY - 200,
//       duration: 1,
//       ease: "power3.out",
//     });
//   });
// });

import { interiors } from "./data.js";

document.addEventListener("DOMContentLoaded", function () {
  const cursor = document.querySelector(".cursor");
  const gallery = document.querySelector(".gallery");
  const numberOfItems = interiors.length; // Use the actual number of interiors
  const radius = 1100;
  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;
  const angleIncrement = (2 * Math.PI) / numberOfItems;

  for (let i = 0; i < numberOfItems; i++) {
    const { name, photographer } = interiors[i];

    // Create item container
    const item = document.createElement("div");
    item.className = "item";
    item.textContent = name;
    document.querySelector(".gallery").appendChild(item);

    // Create text container
    const p = document.createElement("p");
    p.textContent = name;

    // Create photographer's name with link
    const photographerLink = document.createElement("a");
    photographerLink.textContent = `by ${photographer.name}`;
    photographerLink.href = photographer.portfolio;
    photographerLink.target = "_blank"; // Open in a new tab
    photographerLink.style.display = "block";
    photographerLink.style.marginBottom = "5px";
    photographerLink.style.color = "white"; // White text
    photographerLink.style.textDecoration = "none";

    // Create button
    let button = document.createElement("button");
    button.innerHTML = "Click here";
    button.style.fontSize = "16px";
    button.style.cursor = "pointer"; 
    button.style.border = "2px solid black"; 
    button.style.backgroundColor = "black"; 
    button.style.color = "white";
    button.style.marginTop = "5px";
    
    // Set navigation to photographer's portfolio
    button.onclick = function() {
      window.location.href = photographer.portfolio;
    };

    // Append elements
    p.appendChild(photographerLink);
    p.appendChild(button);
    item.appendChild(p);
    gallery.appendChild(item);

    // Positioning with GSAP
    const angle = i * angleIncrement;
    const x = centerX + radius * Math.cos(angle);
    const y = centerY + radius * Math.sin(angle);
    const rotation = (angle * 180) / Math.PI;

    gsap.set(item, { x: x + "px", y: y + "px", rotation: rotation });

    // Hover effect
    item.addEventListener("mouseover", function () {
      const imgSrc = `./assets/img${i + 1}.jpg`;
      const img = document.createElement("img");
      img.src = imgSrc;
      img.style.clipPath = "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)";
      cursor.appendChild(img);

      gsap.to(img, {
        clipPath: "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
        duration: 1,
        ease: "power3.out",
      });
    });

    item.addEventListener("mouseout", function () {
      const imgs = cursor.getElementsByTagName("img");
      if (imgs.length) {
        const lastImg = imgs[imgs.length - 1];
        Array.from(imgs).forEach((img, index) => {
          if (img !== lastImg) {
            gsap.to(img, {
              clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
              duration: 1,
              delay: 0.5,
              ease: "power3.out",
              onComplete: () => {
                setTimeout(() => {
                  img.remove();
                }, 1000);
              },
            });
          }
        });

        gsap.to(lastImg, {
          clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
          duration: 1,
          ease: "power3.out",
          delay: 0.25,
        });
      }
    });
  }

  // Update positions on scroll
  function updatePosition() {
    const scrollAmount = window.scrollY * 0.0001;
    document.querySelectorAll(".item").forEach(function (item, index) {
      const angle = index * angleIncrement + scrollAmount;
      const x = centerX + radius * Math.cos(angle);
      const y = centerY + radius * Math.sin(angle);
      const rotation = (angle * 180) / Math.PI;

      gsap.to(item, {
        duration: 0.05,
        x: x + "px",
        y: y + "px",
        rotation: rotation,
        ease: "elastic.out(1,0.3)",
      });
    });
  }

  updatePosition();
  document.addEventListener("scroll", updatePosition);

  document.addEventListener("mousemove", function (e) {
    gsap.to(cursor, {
      x: e.clientX - 150,
      y: e.clientY - 200,
      duration: 1,
      ease: "power3.out",
    });
  });
});
