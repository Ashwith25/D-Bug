var mymap = L.map('map').setView([18.9902, 73.1277], 15);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYXNod2l0aDI1IiwiYSI6ImNrZmY0Z280aDAwcGMyeHM1MGdja2U2eWMifQ.7564uIAwvFzunrm9WDjrqw'
}).addTo(mymap);

var marker = L.marker([18.9902, 73.1277]).addTo(mymap);


// const ham = document.getElementById('ham') ;
// const navUL = document.getElementById('forham');

// ham.addEventListener('click', () => {
//     navUL.classList.toggle('show');
// });

function myFunction() {
    var x = document.getElementById("ham-links");
    if (x.style.display === "block") {
      x.style.display = "none";
    } 
    else{
      x.style.display = "block";
    }
  }