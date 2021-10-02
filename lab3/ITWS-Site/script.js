document.addEventListener('DOMContentLoaded', function() {
// When the event DOMContentLoaded occurs, it is safe to access the DOM

// When the user scrolls the page, execute 
window.addEventListener('scroll', stick);

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stick() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
})

function toggle(y) {
  var x = document.getElementById(y);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

