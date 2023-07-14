window.onload = function () {
    const menu_btn = document.querySelector(".hamburger");
    const mobile_menu = document.querySelector(".mobile-navbar");
    const menu_close = document.querySelectorAll(".menu-btn");
  
    menu_btn.addEventListener("click", function () {
      menu_btn.classList.toggle("is-active");
      mobile_menu.classList.toggle("is-active");
    });
  
    for (i = 0; i < 5; i++) {
      menu_close[i].addEventListener("click", function () {
        menu_btn.classList.remove("is-active");
        mobile_menu.classList.remove("is-active");
      });
    }
};