
var counter = 0;
var incorrectIndice = 0
var correctIndice = 0
var score = 0;
var pastQuestions = [];
var correctAnswers = [];
var incorrectAnswers = [];


function nextQuestion(answerID){

  var status = document.getElementById(`vbtn-radio${answerID}`).value;
  var statusValue = parseFloat(status, 10)

  if(statusValue === 1){
    correctAnswers[correctIndice] = answerID;
    correctIndice++;
    score = score + 10;
  }else{
    incorrectAnswers[incorrectIndice] = answerID;
    incorrectIndice++;
  }

  var questionID = document.getElementById('QuestionID');
  pastQuestions[counter] = questionID.value;

  ////////// REQUEST CODE
  
  var XML = new XMLHttpRequest();
  XML.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      counter ++;
      document.getElementById('questionContent').innerHTML = this.responseText;
    }
  }
  XML.open('GET', `../view/next.php?list=${pastQuestions}&counter=${counter}&correctAnswers=${correctAnswers}&incorrectAnswers=${incorrectAnswers}&score=${score}`);
  XML.send();
}