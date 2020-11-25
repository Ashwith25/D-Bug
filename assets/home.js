document.getElementById('user-profile').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

document.getElementById('update-username').addEventListener("click", function(){
    document.querySelector('.bg-modal-form').style.display = "flex";
})

document.querySelector('.close-form').addEventListener("click", function() {
	document.querySelector('.bg-modal-form').style.display = "none";
});

function python_hover_in(){
	document.getElementsByClassName('div-blocks')[0].style.color = 'red';
	document.getElementsByClassName('python')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('python')[1].style = "transform: scale(1.1)";
}

function python_hover_out(){
	document.getElementsByClassName('div-blocks')[0].style.color = '#BABABA';
	document.getElementsByClassName('python')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('python')[1].style = "transform: scale(1); z-index: 0";
}

function java_hover_in(){
	document.getElementsByClassName('div-blocks')[1].style.color = 'red';
	document.getElementsByClassName('java')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('java')[1].style = "transform: scale(1.1)";
}

function java_hover_out(){
	document.getElementsByClassName('div-blocks')[1].style.color = '#BABABA';
	document.getElementsByClassName('java')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('java')[1].style = "transform: scale(1); z-index: 0";
}

function js_hover_in(){
	document.getElementsByClassName('div-blocks')[4].style.color = 'red';
	document.getElementsByClassName('js')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('js')[1].style = "transform: scale(1.1)";
}

function js_hover_out(){
	document.getElementsByClassName('div-blocks')[4].style.color = '#BABABA';
	document.getElementsByClassName('js')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('js')[1].style = "transform: scale(1); z-index: 0";
}

function php_hover_in(){
	document.getElementsByClassName('div-blocks')[5].style.color = 'red';
	document.getElementsByClassName('php')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('php')[1].style = "transform: scale(1.1)";
}

function php_hover_out(){
	document.getElementsByClassName('div-blocks')[5].style.color = '#BABABA';
	document.getElementsByClassName('php')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('php')[1].style = "transform: scale(1); z-index: 0";
}

function cpp_hover_in(){
	document.getElementsByClassName('div-blocks')[2].style.color = 'red';
	document.getElementsByClassName('cpp')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('cpp')[1].style = "transform: scale(1.1)";
}

function cpp_hover_out(){
	document.getElementsByClassName('div-blocks')[2].style.color = '#BABABA';
	document.getElementsByClassName('cpp')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('cpp')[1].style = "transform: scale(1); z-index: 0";
}

function csharp_hover_in(){
	document.getElementsByClassName('div-blocks')[3].style.color = 'red';
	document.getElementsByClassName('csharp')[0].style = "transform: scale(1.1)";
	document.getElementsByClassName('csharp')[1].style = "transform: scale(1.1)";
}

function csharp_hover_out(){
	document.getElementsByClassName('div-blocks')[3].style.color = '#BABABA';
	document.getElementsByClassName('csharp')[0].style = "transform: scale(1); z-index: 0";
	document.getElementsByClassName('csharp')[1].style = "transform: scale(1); z-index: 0";
}