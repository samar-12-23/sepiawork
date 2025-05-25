gsap.registerPlugin(ScrollTrigger);

const teamMembers = document.querySelectorAll('.team-member');

teamMembers.forEach((member) => {
  gsap.fromTo(
    member,
    {
      y: 100,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1,
      ease: "power4.out",
      scrollTrigger: {
        trigger: member,
        start: "top 80%",
        end: "top 30%",
        toggleActions: "play none none none",
      }
    }
  );
});

// Dynamic footer interaction
document.getElementById('showInfoBtn').addEventListener('click', () => {
  const extraInfo = document.getElementById('extraInfo');
  const isVisible = extraInfo.style.display === 'block';

  extraInfo.style.display = isVisible ? 'none' : 'block';
  document.getElementById('showInfoBtn').textContent = isVisible ? 'Click for More Info' : 'Click to Hide Info';
});

gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".team-member").forEach((member, index) => {
  gsap.to(member, {
    scrollTrigger: {
      trigger: member,
      start: "top 80%",
      toggleActions: "play none none none"
    },
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out",
    delay: index * 0.2 // stagger appearance
  });
});
