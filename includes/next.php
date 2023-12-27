<?php

require_once("../controller/Question.php");
require_once("../controller/Answer.php");

if(isset($_GET['list']) && isset($_GET['counter']) && isset($_GET['correctAnswers']) && isset($_GET['incorrectAnswers'])){
  $counter = intval($_GET['counter']);
  $correctAnswers = $_GET['correctAnswers'];
  $incorrectAnswers = $_GET['incorrectAnswers'];
  $questions = $_GET['list'];
  if($counter > 8){
    header('Location: ../view/Results.php?incorrectAnswers='.$incorrectAnswers.'&list='.$questions.'&correctAnswers='.$correctAnswers);
  }else{
    $QuestionsObj = new QuestionControl();
    $Question = $QuestionsObj->getNextQuestion($questions);
    echo 
      '<div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: '.($counter+2).'0%"></div>
      </div>
      <div class="alert alert-primary w-75 mx-auto mt-5" role="alert">
        <h1 class="text-center"> '. $Question->getContent() .' </h1>
      </div>
      <form method="" action="" class="container text-center">
        <input type="hidden" value="'. $Question->getID() .'" id="QuestionID">
        <div class="row row-cols-2">';

        $AnswersObj = new AnswerControl();
        $answers = $AnswersObj->getAnswers($Question->getID());
        foreach($answers as $answer){
          echo'<div class="col">      
                  <input type="radio" onclick="nextQuestion('. $answer->getID() .');" value="'.$answer->getStatus().'" class="btn-check answer" name="vbtn-radio" id="vbtn-radio'. $answer->getID() .'">
                  <label class="btn btn-outline-primary py-3 mt-5 w-100" for="vbtn-radio'. $answer->getID() .'">'. $answer->getContent() .'</label>
                </div>';
        }  

      echo
        '</div>
      </form>';  
  }
}