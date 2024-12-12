// Scrolling text feature
const scrollText = document.getElementById('scrolling');
let textPosition = 0;
setInterval(() => {
    textPosition -= 1;
    scrollText.style.transform = `translateX(${textPosition}px)`;
    if (Math.abs(textPosition) >= scrollText.scrollWidth) {
        textPosition = 0;
    }
}, 30);




