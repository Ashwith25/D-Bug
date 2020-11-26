var user_answer;
var real_answer;
var question;

document.querySelector('.question-block').addEventListener("click", function(e){
    if(e.target.className == 'submit-button'){
        quesid = e.target.parentElement.childNodes[0].innerText;
        question = e.target.parentElement.childNodes[1];
        real_answer = e.target.parentElement.childNodes[2].innerText;
        user_answer = e.target.parentElement.childNodes[3].value;
        if (real_answer == user_answer) {
            question.style = "color:green";
            e.target.parentElement.childNodes[3].style = "border: 3px solid green";
            e.target.parentElement.childNodes[4].disabled = true;
            
            var obj = {quesid: quesid};
            var quesJSON = JSON.stringify(obj);
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST","..\\includes\\solved.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("question=" + quesJSON);
        }
        else {
            question.style = "color: red";
            e.target.parentElement.childNodes[3].style = "border: 3px solid red";
        }
    }
});

// var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("txtHint").innerHTML = this.responseText;
//       }
//     };
//     xmlhttp.open("POST","..\\includes\\getuser.php",true);
//     xmlhttp.send();