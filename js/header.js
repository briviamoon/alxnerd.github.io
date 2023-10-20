// ###################################################################################
								/* FUNCTION THAT GRABS ELEMENTS */

/**
 * selectElement - grabs any element from document
 * @selector: element as argument
 * Return: returns element properties
*/
const selectElement = selector => {
	const element = document.querySelector(selector);
	if (element) {
		return element;
	}
	else {
		throw new Error(`Something is off, your (${selector}) does not exist`);
	}
};

//#####################################################################################
// ####################################################################################
 								/* NAV STYLE ON SCROLL */

const scrollHeader = () => {
	const headerElement = selectElement('#header');
	if(this.scrollY >= 15)
	{
		headerElement.classList.add('activated');
	}
	else{
		headerElement.classList.remove('activated');
	}
};

window.addEventListener('scroll', scrollHeader);

//####################################################################################
// ###################################################################################
 						/* OPEN MENU ON MOBILE */

const menuToggleIcon = selectElement('#menu-toggle-icon');

function toggleMenu() {
	const mobileMenu = selectElement('#menu');

	mobileMenu.classList.toggle('activated');
	menuToggleIcon.classList.toggle('activated');
}

menuToggleIcon.addEventListener('click', toggleMenu);

//#########################################################################################
//#########################################################################################
							/* SWITCH THEMES */

const bodyElement = document.body; //the body of html
const themeToggleBtn = selectElement('#theme-toggle-btn'); //the sun and moon icons
const currentTheme = localStorage.getItem('currentTheme'); //this gets the current theme thet is present  in local storage.

if (currentTheme) {
	bodyElement.classList.add('light-theme');
}

themeToggleBtn.addEventListener('click', () => {
	bodyElement.classList.toggle('light-theme');

	if (bodyElement.classList.contains('light-theme')) {
		localStorage.setItem('currentTheme', 'themeActive');
	}
	else {
		localStorage.removeItem('currentTheme');
	}
});

//#########################################################################################
//#########################################################################################

						/* OPEN AND CLOSE THE SEACH BAR */

const openSearchBtn = selectElement('#search-icon');
const closeSearchBtn = selectElement('#form-close-btn');
const searchFormCont = selectElement('#search-form-container');

/**function to open search bar */
openSearchBtn.addEventListener('click', () =>{
	searchFormCont.classList.add('activated');
});

/**function to close the srarch bar */
closeSearchBtn.addEventListener('click', () =>{
	searchFormCont.classList.remove('activated');
});
				/**close search box on Esc Key */
window.addEventListener('keyup', event => {
	if (event.key === 'Escape')
	{
		searchFormCont.classList.remove('activated');
	}
});

export {selectElement};