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
        }
        else {
            question.style = "color: red";
            e.target.parentElement.childNodes[3].style = "border: 3px solid red";
        }
    }
});

// var question = document.getElementsByClassName("question");
