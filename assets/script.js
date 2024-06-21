// ===== buger menu for mobile display ======== //

const icon = document.querySelector(".burger");
const list = document.querySelector(".nav-list-mobile");

icon.addEventListener("click", function (){
    list.classList.toggle("list-visible");
    icon.classList.toggle("icon-rotation");
});

document.addEventListener("click", function (event){
	const isClickInsideNavabr = list.contains(event.target); 
	const isClickOnIcon = icon.contains(event.target);

	if (!isClickInsideNavabr && !isClickOnIcon) {
		list.classList.remove("list-visible");
        icon.classList.remove("icon-rotation");
	};
});

// ========================================== //

// ======== navbar desktop scroll =========== //

const nav = document.querySelector(".navbar-desktop");

window.addEventListener('scroll', () => {
	if (window.scrollY > 348) {
		nav.classList.add('scroll');
	} else {
		nav.classList.remove('scroll');
	}
});

// ========================================== //