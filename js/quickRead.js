import { selectElement } from "./headerjs";

/* Swiper JS */

const swiper = new Swiper('.swiper',{
	slidesPerView: 1,
	SpaceBetween: 20,
	navigation: {
		nextEl: '.swiper-button-next',
		nextEl: 'swiper-button-prev'
	},
	breakpoints: {
		700: {
			slidesPerView: 2
		},
		1200: {
			slidesPerView: 3
		}
	}
});