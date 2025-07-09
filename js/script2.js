console.log("Script loaded");

/* ============================== typing animation ============================ */
const typingElement = document.querySelector(".typing");

if (typingElement) {
  var typed = new Typed(typingElement, {
    strings: [
      "",
      "Web Designer",
      "Web Developer",
      "Graphic Designer",
      "YouTuber",
    ],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true,
  });
} else {
  console.log("Element with class '.typing' not found.");
}

/* ============================== Aside ============================ */
const nav = document.querySelector(".nav"),
  navList = nav.querySelectorAll("li"),
  totalNavList = navList.length,
  allSection = document.querySelectorAll(".section"),
  totalSection = allSection.length;

for (let i = 0; i < totalNavList; i++) {
  const a = navList[i].querySelector("a");
  a.addEventListener("click", function () {
    removeBackSection();
    for (let j = 0; j < totalNavList; j++) {
      navList[j].querySelector("a").classList.remove("active");
    }
    this.classList.add("active");
    showSection(this);
    if (window.innerWidth < 1200) {
      asideSectionTogglerBtn();
    }
    updateNav(this); // Call updateNav here to reflect changes
  });
}

function removeBackSection() {
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.remove("back-section");
  }
}

function addBackSection(num) {
  allSection[num].classList.add("back-section");
}

function showSection(element) {
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.remove("active");
  }
  const target = element.getAttribute("href").split("#")[1];
  document.querySelector("#" + target).classList.add("active");
}

function updateNav(element) {
  const target = element.getAttribute("href").split("#")[1];
  for (let i = 0; i < totalNavList; i++) {
    const navLink = navList[i].querySelector("a");
    navLink.classList.remove("active");
    if (target === navLink.getAttribute("href").split("#")[1]) {
      navLink.classList.add("active");
    }
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const hireMeButton = document.querySelector(".hire-me");
  if (hireMeButton) {
    hireMeButton.addEventListener("click", function () {
      const sectionIndex = this.getAttribute("data-section-index");
      showSection(this);
      updateNav(this);
      removeBackSection();
      addBackSection(sectionIndex);
      console.log("Hire Me button clicked");
    });
  } else {
    console.log("Hire Me button not found");
  }
});

const navTogglerBtn = document.querySelector(".nav-toggler"),
  aside = document.querySelector(".aside");

console.log(navTogglerBtn); // Log untuk memastikan elemen ditemukan
console.log("tes"); // Log untuk memastikan elemen ditemukan

if (navTogglerBtn) {
  navTogglerBtn.addEventListener("click", () => {
    console.log("Toggler clicked"); // Debug log
    asideSectionTogglerBtn();
  });
} else {
  console.log("Nav toggler button not found");
}

function asideSectionTogglerBtn() {
  aside.classList.toggle("open");
  navTogglerBtn.classList.toggle("open");
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.toggle("open");
  }
}
