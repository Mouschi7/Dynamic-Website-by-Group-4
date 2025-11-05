// Ripple effect on buttons
document.querySelectorAll(".google-btn, .signup-btn").forEach(button => {
  button.addEventListener("click", e => {
    const ripple = document.createElement("span");
    ripple.classList.add("ripple");
    ripple.style.left = `${e.offsetX}px`;
    ripple.style.top = `${e.offsetY}px`;
    button.appendChild(ripple);
    setTimeout(() => ripple.remove(), 600);
  });
});

// Smooth fade when scrolling (optional)
window.addEventListener("scroll", () => {
  document.querySelectorAll(".fade-in").forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 50) {
      el.style.animation = "fadeUp 1s ease forwards";
    }
  });
});
