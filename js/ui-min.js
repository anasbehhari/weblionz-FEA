var loader = document.querySelector(".loader");
window.onload = () => {
  loader.classList.toggle("hidden");

  setTimeout(() => {
    loader.remove();
  }, 1000);
};
var label = document.querySelector("label");
var Nav = document.querySelector(".navBar");
label.onclick = () => {
  Nav.classList.toggle("active");
};