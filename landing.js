var mymap = L.map('map').setView([18.9902, 73.1277], 15);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYXNod2l0aDI1IiwiYSI6ImNrZmY0Z280aDAwcGMyeHM1MGdja2U2eWMifQ.7564uIAwvFzunrm9WDjrqw'
}).addTo(mymap);

var marker = L.marker([18.9902, 73.1277]).addTo(mymap);

document.addEventListener("mouseup", function(event) {
  var obj = document.getElementById("ham");
  if (!obj.contains(event.target)) {
    document.querySelector("#ham-links").style.display = "none";
  }
});


function myFunction() {
    var x = document.querySelector("#ham-links");
    
    if (x.style.display === "flex") {
      x.style.display = "none";
      return true;
    } 
    else{
      x.style.display = "flex";
      return true;
    }
  }

// form submit

function query_submit(){
	if (formValidator()==true){
		var forms = document.getElementsByName("query-form");
		forms[0].submit();
		alert("Query submitted successfully !");
	}
}

function formValidator(){
	flag=false;
  var username = document.getElementById("query-name").value;
  var email = document.getElementById("query-email").value;
  var numbers = document.getElementById("query-phone").value;
  console.log(numbers.length)
  var text_area = document.getElementById("query-text").value; 
	if (username=="" && email=="" && text_area==""){
		alert("All fields are empty");
	}
	else if (username==""){
		alert("Username field is empty");
  }
  else if (email==""){
    alert("Email field is empty");
  }
  else if (numbers.length!=10) {
    alert("Number must be of 10 digits");
  }
	else{
		flag=true;
	}
	return flag;
}


// landing video
var landing_video = document.getElementById("landing-video");

function video_play() {
    landing_video.play();
}

function video_pause() {
    landing_video.pause();
}

function fullscreen() {
  landing_video.webkitRequestFullScreen();
}