document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".wrapper");

  if (wrapper) {
    wrapper.classList.add("fondu-out");
  }

  setTimeout(() => {
    wrapper.classList.add("new-class");
  }, 5000);
});

document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".wrapper");

  if (wrapper) {
    wrapper.classList.add("fondu-out");
  }

  window.addEventListener("scroll", () => {
    // sticky navbar on scroll script
    if (window.scrollY > 20) {
      document.querySelector(".navbar").classList.add("sticky");
    } else {
      document.querySelector(".navbar").classList.remove("sticky");
    }
  });
});
