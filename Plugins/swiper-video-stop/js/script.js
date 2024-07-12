const swiperCarousel = new Swiper('#swiperCarousel', {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});
swiperCarousel.on('slideChange', function () {
	let videos = document.querySelectorAll('video');
	videos.forEach(video => {
		video.pause();
		video.currentTime = 0;
	});
	// Autoplay the video in the active slide
	let activeSlideVideo = swiperCarousel.slides[swiperCarousel.activeIndex].querySelector('video');
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
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: swiperThumbCarousel,
	},
});
