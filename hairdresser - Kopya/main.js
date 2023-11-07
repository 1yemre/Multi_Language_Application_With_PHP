const responsiveButton = document.getElementById("resposive-bar");
const nav = document.getElementById("nav");
acikmi = true;

responsiveButton.addEventListener("click", () => {
  nav.classList.toggle("active");
});
