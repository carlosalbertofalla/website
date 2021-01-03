//bouton haut


// document.getElementById("button-up").addEventListener("click", scrollUp);

// function scrollUp(){

//     var currentScroll = document.documentElement.scrollTop;

//     if (currentScroll > 0){
//         window.requestAnimationFrame(scrollUp);
//         window.scrollTo (0, currentScroll - (currentScroll / 10));

//     }
// }


// buttonUp = document.getElementById("button-up");

// window.onscroll = function(){

//     var scroll = document.documentElement.scrollTop;

//     if (scroll > 500){
//         buttonUp.style.transform = "scale(1)";
//     }else if(scroll < 500){
//         buttonUp.style.transform = "scale(0)";
//     }

// }

function irArriba(pxPantalla){
	window.addEventListener('scroll', () => {
		var scroll = document.documentElement.scrollTop;
		
		var botonArriba = document.getElementById('botonArriba');
		
		if(scroll > 450){
			botonArriba.style.right = 20 + "px";
		} else{
			botonArriba.style.right = -100 + "px";
		}
	})
}

irArriba(500);

//Barra menu

addEventListener('DOMContentLoaded', () => {
	const btn_menu = document.querySelector('.btn_menu')
	if (btn_menu) {
		btn_menu.addEventListener('click', () => {
			const menu_items = document.querySelector('.menu_items')
			menu_items.classList.toggle('show')
		})
	}
})

