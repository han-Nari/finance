let activePage = window.location.pathname;
let navLinks = document.querySelectorAll('a');

navLinks.forEach(item => {
    if(item.href.includes(`${activePage}`)) {
        item.classList.add('active');
    }
});

let navBtn = document.querySelector('.bar');
let sideBar = document.querySelector('nav');
let changeIcon = document.querySelector('.fa-bars');

navBtn.addEventListener('click', (e) => {
    sideBar.classList.toggle('slide');
    if(changeIcon.classList.contains('fa-bars')) {
        changeIcon.classList.toggle('fa-times');
    }
});

let darkTheme = document.querySelector('.fa-sun');
darkTheme.addEventListener('click', () => {
    document.querySelector('header').classList.toggle('black');
    document.querySelector('main').classList.toggle('black');
    document.querySelector('section').classList.toggle('black');
    if(darkTheme.classList.contains('fa-sun')) {
        darkTheme.classList.toggle('fa-moon');
    }
});

let dropdown = document.querySelector('.menu');
let dropdownMenu = document.querySelector('.dropdown-menu');
let caret = document.querySelector('.right');

dropdown.addEventListener('click', () => {
	dropdownMenu.classList.toggle('show');
	caret.classList.toggle('show');
});

let dropdown_1 = document.querySelector('.menu_one');
let dropdownMenu_1 = document.querySelector('.dropdown-menu_one');
let caret_1 = document.querySelector('#right');

dropdown_1.addEventListener('click', () => {
	dropdownMenu_1.classList.toggle('show');
	caret_1.classList.toggle('show');
});

let dropdown_2 = document.querySelector('.menu_two');
let dropdownMenu_2 = document.querySelector('.dropdown-menu_two');
let caret_2 = document.querySelector('#right_two');

dropdown_2.addEventListener('click', () => {
	dropdownMenu_2.classList.toggle('show');
	caret_2.classList.toggle('show');
});

// let dropdown_3 = document.querySelector('.menu_three');
// let dropdownMenu_3 = document.querySelector('.dropdown-menu_three');
// let caret_3 = document.querySelector('#right_three');

// dropdown_3.addEventListener('click', () => {
//     dropdownMenu_3.classList.toggle('show');
//     caret_3.classList.toggle('show');
// });


let down = document.querySelector('.down');
let drp_menu = document.querySelector('.drp_menu');

down.addEventListener('click', () => {
	drp_menu.classList.toggle('out');
});

document.onclick = function(e) {
	if(down !== e.target && drp_menu !== e.target) {
		drp_menu.classList.remove('out');
	}
}

// let changeTheme = document.querySelector('.white');
// let main = document.querySelector('main');

// changeTheme.addEventListener('click', ()=> {
// 	main.classList.toggle('changeColor');
// 	nav.classList.toggle('changeColor');
// });

// const active = document.querySelectorAll('li');
// active.forEach(item => {
// 	item.addEventListener('click', ()=> {
// 		active.forEach(item => {
// 			item.classList.remove('active');
// 		});
// 			item.classList.add('active');
// 	});
// });
