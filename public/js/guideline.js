gsap.registerPlugin(ScrollTrigger);

// Hero fade-in
gsap.from(".hero-content", {
  y: 50,
  opacity: 0,
  duration: 3,
  ease: "power2.out"
});

// Section animations
gsap.utils.toArray(".animated-section").forEach(section => {
  gsap.from(section, {
    scrollTrigger: {
      trigger: section,
      start: "top 80%",
    },
    y: 80,
    opacity: 0,
    duration: 4.5,
    ease: "expo.out"
  });
});

// FAQ dropdown logic
document.querySelectorAll(".faq-question").forEach(q => {
  q.addEventListener("click", () => {
    const ans = q.nextElementSibling;
    const allAnswers = document.querySelectorAll(".faq-answer");

    allAnswers.forEach(a => {
      if (a !== ans) a.style.display = "none";
    });

    ans.style.display = ans.style.display === "block" ? "none" : "block";
  });
});
