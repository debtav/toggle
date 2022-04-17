const btn = document.querySelector(".toggler");
btn.addEventListener("click", function() {
  document.body.classList.toggle("dark-theme");
  let theme = "light";
  if (document.body.classList.contains("dark-theme")) {
    theme = "dark";
  }else{
    theme = "light";
  }
  document.cookie = "theme=" + theme;
});
