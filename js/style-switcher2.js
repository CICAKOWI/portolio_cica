/* ========================== toggle style switcher =========================== */
const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");
const styleSwitcher = document.querySelector(".style-switcher");

styleSwitcherToggle.addEventListener("click", () => {
  styleSwitcher.classList.toggle("open");
});

// Hide style switcher on scroll
window.addEventListener("scroll", () => {
  if (styleSwitcher.classList.contains("open")) {
    styleSwitcher.classList.remove("open");
  }
});

/* ========================== theme colors =========================== */
const alternateStyles = document.querySelectorAll(".alternate-style");

function setActiveStyle(color) {
  alternateStyles.forEach((style) => {
    if (color === style.getAttribute("title")) {
      style.removeAttribute("disabled");
    } else {
      style.setAttribute("disabled", ""); // Use an empty string for consistency
    }
  });
}

/* ========================== theme light and dark mode =========================== */
const dayNight = document.querySelector(".day-night");

// Check theme when the page loads
window.addEventListener("load", () => {
  const currentTheme = localStorage.getItem("theme");

  if (currentTheme === "dark") {
    // console.log("ini dark woiiiii");
    document.body.classList.add("dark");
    dayNight.querySelector("i").classList.add("fa-sun");
    dayNight.querySelector("i").classList.remove("fa-moon");
  } else {
    // console.log("kalo ini mode white");
    document.body.classList.remove("dark");
    dayNight.querySelector("i").classList.add("fa-moon");
    dayNight.querySelector("i").classList.remove("fa-sun");
  }
});

// Handle click to toggle theme
dayNight.addEventListener("click", () => {
  const icon = dayNight.querySelector("i");
  icon.classList.toggle("fa-sun");
  icon.classList.toggle("fa-moon");

  if (document.body.classList.contains("dark")) {
    document.body.classList.remove("dark");
    localStorage.setItem("theme", "light"); // Save theme preference to localStorage
    console.log("jadilah putih");
  } else {
    document.body.classList.add("dark");
    localStorage.setItem("theme", "dark"); // Save theme preference to localStorage
    console.log("jadilah hitam");
  }
});
