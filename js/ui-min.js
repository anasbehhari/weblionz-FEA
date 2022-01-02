var loader = document.querySelector(".loader");
window.onload = () => {
  loader.classList.toggle("hidden");
  setTimeout(() => {
    loader.remove();
    if(document.querySelector(".popup")) {
      document.querySelector(".popup").classList.add("active");
      setTimeout(()=> {
        document.querySelector(".popup").classList.remove("active");
        setTimeout(()=> {
          document.querySelector(".popup").remove();
        },4000)
      },3000)
    }
  }, 1000);
};
var label = document.querySelector("label");
var Nav = document.querySelector(".navBar");
label.onclick = () => {
  Nav.classList.toggle("active");
};