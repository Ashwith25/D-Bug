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
		alert("Form submission successfull!");
	}
}


function formValidator(){
	flag=false;
	var username = document.forms["signup_form"]["name"].value;
	var pass = document.getElementsByName("password");
	var conf_pass = document.getElementsByName("confirm_password");
	var email = document.getElementsByName("email");
	if (username=="" & email=="" & pass[0].value=="" & conf_pass[0].value=="" ){
		alert("Username field is empty");
	}
	else if (username==""){
		alert("All fields are empty");
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