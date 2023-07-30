document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.querySelector(".menu-icon");
  const menuList = document.querySelector(".navbar ul");

  menuIcon.addEventListener("click", function () {
    menuIcon.classList.toggle("active");
  });
});
