const words = [" Muhammad Ihsan", "a Front-End Developer",  "a Passionate Coder"];
  const rotatingText = document.querySelector(".rotating-text");
  let i = 0;

  setInterval(() => {
    i = (i + 1) % words.length;
    rotatingText.style.opacity = 0;
    setTimeout(() => {
      rotatingText.textContent = words[i];
      rotatingText.style.opacity = 1;
    }, 300);
  }, 2500);



  