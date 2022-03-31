const nb = document.querySelector('.navbar-home');
if (nb != null) {
  window.addEventListener('scroll', function () {
    if (window.scrollY == 0) {
      nb.classList.remove("anim-navbar-home");
    } else {
      nb.classList.add("anim-navbar-home");
    }
  });
}
