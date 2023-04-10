let slides = document.querySelectorAll(".slide");
let cards = document.querySelectorAll(".values__box");
let currentSlide = 0;
let currentCard = 0;
let slideInterval = setInterval(nextSlide, 5000);


function nextSlide() {
	slides[currentSlide].classList.remove("active");
	currentSlide = (currentSlide + 1) % slides.length;
	slides[currentSlide].classList.add("active");
}

const nextCard = () => {
	cards[currentCard].classList.remove("active");
	currentCard = (currentCard + 1) % cards.length;
	cards[currentCard].classList.add("active");
}

let cardInterval = setInterval(nextCard, 6000 )

let menuBtn = document.getElementById("menuBtn");
let nav = document.getElementById("nav")

const slideMenu = () => {
	if (nav.classList.contains("active")) {
		nav.classList.remove("active")
	} else {
		nav.classList.add("active")
	}
}

menuBtn.addEventListener("click", slideMenu, false);
