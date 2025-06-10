import './styles.scss';

const carousel = document.getElementById("carousel-background");
const cards = carousel.querySelectorAll(".carousel-card");
const cardCount = cards.length;
const radius = 400; // radius of the circle (adjust for size)
const theta = 360 / cardCount;

for (let i = 0; i < cardCount; i++) {
  const angle = theta * i;
  cards[i].style.transform = `rotateY(${angle}deg) translateZ(${radius}px)`;
}
