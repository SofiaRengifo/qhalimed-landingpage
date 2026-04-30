import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AOS from 'aos';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        once: true,
        duration: 900
    });
});
  const btnScrollTop = document.getElementById("btn-scroll-top");

  window.onscroll = function() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      btnScrollTop.style.display = "flex";
    } else {
      btnScrollTop.style.display = "none";
    }
  };

  btnScrollTop.onclick = function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  };