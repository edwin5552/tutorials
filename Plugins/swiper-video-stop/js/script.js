const swiperCarousel = new Swiper('#swiperCarousel', {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination-one',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next-one',
		prevEl: '.swiper-button-prev-one',
	},
});
swiperCarousel.on('slideChange', function () {
	let videos = document.querySelectorAll('.video1');
	videos.forEach(video => {
		video.pause();
		video.currentTime = 0;
	});
	// Autoplay the video in the active slide
	let activeSlideVideo = swiperCarousel.slides[swiperCarousel.activeIndex].querySelector('.video1');
	if (activeSlideVideo) {
		activeSlideVideo.play();
	}
});



const swiperCarousel2 = new Swiper('#swiperCarousel2', {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination-two',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next-two',
		prevEl: '.swiper-button-prev-two',
	},
});
swiperCarousel2.on('slideChange', function () {
	let videos = document.querySelectorAll('.video2');
	videos.forEach(video => {
		video.pause();
		video.currentTime = 0;
	});
	// Autoplay the video in the active slide
	let activeSlideVideo = swiperCarousel2.slides[swiperCarousel2.activeIndex].querySelector('.video2');
	if (activeSlideVideo) {
		activeSlideVideo.play();
	}
});

// CAROUSEL WITH THUMNAIL
var swiperThumbCarousel = new Swiper("#swiperThumbCarousel", {
	loop: true,
	spaceBetween: 15,
	slidesPerView: 3,
	freeMode: true,
	watchSlidesProgress: true,
});
var swiperMainCarousel = new Swiper("#swiperMainCarousel", {
	loop: true,
	spaceBetween: 30,
	navigation: {
		nextEl: ".swiper-button-next-three",
		prevEl: ".swiper-button-prev-three",
	},
	thumbs: {
		swiper: swiperThumbCarousel,
	},
});
swiperMainCarousel.on('slideChange', function () {
	let videos = document.querySelectorAll('.video3');
	videos.forEach(video => {
		video.pause();
		video.currentTime = 0;
	});
	// Autoplay the video in the active slide
	let activeSlideVideo = swiperMainCarousel.slides[swiperMainCarousel.activeIndex].querySelector('.video3');
	if (activeSlideVideo) {
		activeSlideVideo.play();
	}
});




// =====[VIMEO]=====
const swiperCarouselVimeo1 = new Swiper('#swiperCarouselVimeo1', {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination-vimeo-one',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next-vimeo-one',
		prevEl: '.swiper-button-prev-vimeo-one',
	},
});
// Vimeo Players
var players = [];
var iframes = document.querySelectorAll('iframe');

// Initialize Vimeo Players
iframes.forEach(function (iframe) {
	var player = new Vimeo.Player(iframe);
	players.push(player);
});

// Function to pause all players
function pauseAllPlayers() {
	players.forEach(function (player) {
		player.pause();
	});
}

// Autoplay the first video
players[0].play();

// Handle slide change events
swiperCarouselVimeo1.on('slideChange', function () {
	// Pause all players
	pauseAllPlayers();

	// Play the current slide's video
	var activeIndex = swiperCarouselVimeo1.realIndex; // Get the real index of the active slide
	if (players[activeIndex]) {
		players[activeIndex].play();
	}
});