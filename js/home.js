const animatedTexts = document.querySelectorAll('.animated-text');


function animateText(animatedText) {
  const text = animatedText.textContent;
  let speed = animatedText.getAttribute("speed");
  let delay = animatedText.getAttribute("delay");
  if (speed == null) {
    speed = 30;
  }
  if (delay == null) {
    delay = 0;
  }
  animatedText.innerHTML = '';
  for (let i = 0; i < text.length; i++) {
    if (text[i] == ' ') {
      animatedText.innerHTML += ' ';
    }
    animatedText.innerHTML += `<span>${text[i]}</span>`;
  }

  setTimeout(function () {
    let idx = 0;
    function writeChar() {
      const span = animatedText.querySelectorAll('span')[idx];
      span.classList.add('fade');
      idx++;
      if (idx == text.length) {
        clearInterval(writeCharInterval);
      }
    }
  
    let writeCharInterval = setInterval(writeChar, speed);
  }, delay);
}

animatedTexts.forEach(animateText);
