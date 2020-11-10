const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const login = document.getElementById('loginbutton');


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function form_submit(){
	if (formValidator()==true){
		var forms = document.getElementsByName("signup_form");
		forms[0].submit();
	}
}

function formValidator(){
	flag=false;
	var username = document.forms["signup_form"]["name"].value;
	var pass = document.getElementsByName("password");
	var conf_pass = document.getElementsByName("confirm_password");
	var email = document.getElementsByName("email");
	if (username=="" && email[0].value=="" && pass[0].value=="" && conf_pass[0].value==""){
		document.querySelector('.error').innerHTML = 'All fields are empty';
	}
	else if (username==""){
		document.querySelector('.error').innerHTML = 'Username field is empty';
	}
	else if(email[0].value==""){
		document.querySelector('.error').innerHTML = 'Email field is empty';
	}
	else if(!email[0].value.match('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z].{2,3}$')){
		document.querySelector('.error').innerHTML = 'Invalid Email';
	}
	else if(pass[0].value=="" || conf_pass[0].value==""){
		document.querySelector('.error').innerHTML = 'Password fields are empty';
	}
	else if (!pass[0].value.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{5,}$")){
		document.querySelector('.error').innerHTML = 'Password format mismatch';
	}
	else if(pass[0].value != conf_pass[0].value){
		document.querySelector('.error').innerHTML = 'Passwords did not match';
	}
	else{
		flag=true;
	}
	return flag;
}

function formValidator_signin(){
	flag=false;
	var signin_email=document.getElementsByName("signin_email");
	var signin_pass=document.getElementsByName("signin_password");
	if (signin_email[0].value=="" && signin_pass[0].value==""){
		alert("All fields are empty");
	}
	else if (signin_email[0].value==""){
		alert("Email field is empty");
	}
	else if (signin_pass[0].value==""){
		alert("Password field is empty");
	}
	else {
		flag=true;
	}
	return flag;
}

function form_submit_signin(){
	if (formValidator_signin()==true){
		var forms = document.getElementsByName("signin_form");
		forms[0].submit();
	}
}

