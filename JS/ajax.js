
var counter = 0;
var pastQuestions = [];

document.getElementById('next_button').addEventListener('click', (e)=>{
  nextQuestion();
});

function nextQuestion(){
  var questionID = document.getElementById('QuestionID');
  var XML = new XMLHttpRequest();
  pastQuestions[counter] = questionID.value;
  XML.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      counter ++;
      document.getElementById('questionContent').innerHTML = this.responseText;
    }
  }
  XML.open('GET', `../includes/next.php?list=${pastQuestions}&counter=${counter}`);
  XML.send();
}