var loader = document.querySelector(".loader");
window.onload = () => {
  setTimeout(() => {
    loader.classList.add("hidden");
    if (document.querySelector("video")) {
      document.querySelector("body").focus();
      AOS.init({
        once: true,
        offset: 120,
        delay: 100,
        duration: 800,
        easing: "ease",
      });
    }
  }, 1000);
  
  if (document.querySelector("h1.nm")) {
    setTimeout(() => {
      loader.remove();
      document.querySelector("header").classList.remove("nm");
      document.querySelector("h1.nm").classList.remove("nm");
      document.querySelector(".learnmore").classList.remove("nm");
      document.querySelector(".scroll").classList.remove("nm");
      document.querySelector(".scroll svg").classList.add("an");
      document.querySelectorAll(".social-media li ").forEach((el) => {
        el.classList.remove("nm");
      });
    }, 2000);
  }
};
var label = document.querySelector("label");
var Nav = document.querySelector(".navBar");
label.onclick = () => {
  Nav.classList.toggle("active");
};
if (Swiper !="undefined" && document.getElementById("contactus")) {
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });
}
