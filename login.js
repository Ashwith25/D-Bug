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
		alert("Signup successful !");
	}
}

function formValidator(){
	flag=false;
	var username = document.forms["signup_form"]["name"].value;
	var pass = document.getElementsByName("password");
	var conf_pass = document.getElementsByName("confirm_password");
	var email = document.getElementsByName("email");
	if (username=="" && email[0].value=="" && pass[0].value=="" && conf_pass[0].value==""){
		alert("All fields are empty");
	}
	else if (username==""){
		alert("Username field is empty");
	}
	else if(pass[0].value=="" || conf_pass[0].value==""){
		alert("Password fields are empty");
	}
	else if(pass[0].value != conf_pass[0].value){
		alert("Passwords did not match! Please try again");
		return false;
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
		alert("login successful!");
	}
}
