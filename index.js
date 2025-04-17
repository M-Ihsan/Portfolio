function toggleTheme() {
    const html = document.documentElement;
    if (html.getAttribute('data-theme') === 'dark') {
      html.setAttribute('data-theme', 'light');
    } else {
      html.setAttribute('data-theme', 'dark');
    }
  }


  AOS.init({
    once: true,
    duration: 800,
    easing: 'ease-in-out',
  });
  window.addEventListener("load", function() {
    document.getElementById("loader").style.display = "none";
  });

  