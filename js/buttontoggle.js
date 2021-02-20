function navToggleFunction() {
  var element = document.getElementById("navigation");
  var element2 = document.getElementsByTagName("body")[0];
  element.classList.toggle("show");
  element2.classList.toggle("navbar-open");
}
