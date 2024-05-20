// script.js
const dropdownBtn = document.querySelectorAll(".dropdown-btn");
const dropdown = document.querySelectorAll(".dropdown");
const hamburgerBtn = document.getElementById("hamburger");
const navMenu = document.querySelector(".menu");
const links = document.querySelectorAll(".dropdown a");

function setAriaExpandedFalse() {
  dropdownBtn.forEach((btn) => btn.setAttribute("aria-expanded", "false"));
}

function closeDropdownMenu() {
  dropdown.forEach((drop) => {
    drop.classList.remove("active");
    drop.addEventListener("click", (e) => e.stopPropagation());
  });
}

function toggleHamburger() {
  navMenu.classList.toggle("show");
}

dropdownBtn.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    const dropdownIndex = e.currentTarget.dataset.dropdown;
    const dropdownElement = document.getElementById(dropdownIndex);

    dropdownElement.classList.toggle("active");
    dropdown.forEach((drop) => {
      if (drop.id !== btn.dataset["dropdown"]) {
        drop.classList.remove("active");
      }
    });
    e.stopPropagation();
    btn.setAttribute(
      "aria-expanded",
      btn.getAttribute("aria-expanded") === "false" ? "true" : "false"
    );
  });
});

// close dropdown menu when the dropdown links are clicked
links.forEach((link) =>
  link.addEventListener("click", () => {
    closeDropdownMenu();
    setAriaExpandedFalse();
    toggleHamburger();
  })
);

// close dropdown menu when you click on the document body
document.documentElement.addEventListener("click", () => {
  closeDropdownMenu();
  setAriaExpandedFalse();
});

// close dropdown when the escape key is pressed
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeDropdownMenu();
    setAriaExpandedFalse();
  }
});

hamburgerBtn.addEventListener("click", toggleHamburger);

const video = document.getElementById('mi-video');
const lazy = new Lazy(video, {
  threshold: 200 // Distancia desde el elemento al viewport para cargar
});

document.getElementById('toggleDescription').addEventListener('click', function() {
  const fullDescription = document.getElementById('fullDescription');
  if (fullDescription.classList.contains('hidden')) {
      fullDescription.classList.remove('hidden');
      this.textContent = 'Ocultar descripción completa';
  } else {
      fullDescription.classList.add('hidden');
      this.textContent = 'Leer descripción completa';
  }
});

const tabs = document.querySelectorAll('#tabs li');
const tabContents = document.querySelectorAll('.tab-content');

tabs.forEach(tab => {
  tab.addEventListener('click', function() {
      tabs.forEach(item => item.classList.remove('active'));
      tab.classList.add('active');

      const tabContent = document.querySelector(`#${this.dataset.tab}`);
      tabContents.forEach(content => content.classList.remove('active'));

      tabContent.classList.add('active');
  });
});

