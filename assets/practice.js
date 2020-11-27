var user_answer;
var real_answer;
var question;

document.querySelector('.question-block').addEventListener("click", function(e){
    if(e.target.className == 'submit-button'){
            console.log(e.target.parentElement.childNodes);
        quesid = e.target.parentElement.childNodes[0].innerText;
        var obj = {quesid: quesid};
            var quesJSON = JSON.stringify(obj);
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    myObj = JSON.parse(this.responseText); 
                    console.log(myObj);
                    console.log(myObj[0].answer);
                    real_answer = myObj[0].answer;
                }
            }
            xmlhttp.open("POST","..\\includes\\getAnswer.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
            console.log(quesJSON);
            xmlhttp.send("question=" + quesJSON ); 
        question = e.target.parentElement.childNodes[1];
        user_answer = e.target.parentElement.childNodes[2].value;
        if (real_answer == user_answer) {
            question.style = "color:green";
            e.target.parentElement.childNodes[2].style = "border: 3px solid green";
            e.target.parentElement.childNodes[3].disabled = true;
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST","..\\includes\\solved.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("question=" + quesJSON);
        }
        else {
            question.style = "color: red";
            e.target.parentElement.childNodes[2].style = "border: 3px solid red";
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