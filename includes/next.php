<?php

require_once("../controller/Question.php");
require_once("../controller/Answer.php");

if(isset($_GET['list']) && isset($_GET['counter'])){
  $counter = intval($_GET['counter']);
  if($counter > 8){
    header('Location: ../view/Results.php');
  }elseif($counter === 8){
    $QuestionsObj = new QuestionControl();
    $Question = $QuestionsObj->getNextQuestion($_GET['list']);
    echo $_GET['list'];
    echo 
     '<div class="alert alert-primary w-75 mx-auto mt-5" role="alert">
        <h1 class="text-center"> '. $Question->getContent() .' </h1>
      </div>
      <form method="" action="" class="container text-center">
        <input type="hidden" value="'. $Question->getID() .'" id="QuestionID">
        <div class="row row-cols-2">';

        $AnswersObj = new AnswerControl();
        $answers = $AnswersObj->getAnswers($Question->getID());
        foreach($answers as $answer){
          echo'<div class="col">      
                  <input type="radio" onclick="displayNext();" class="btn-check" value="'. $answer->getID() .'" name="vbtn-radio" id="vbtn-radio'. $answer->getID() .'">
                  <label class="btn btn-outline-primary py-3 mt-5 w-100" for="vbtn-radio'. $answer->getID() .'">'. $answer->getContent() .'</label>
                </div>';
        }
    echo 
        '</div>
        <div class="text-end">
          <button class="btn btn-primary px-5 mt-5 d-none" type="button" onclick="nextQuestion();" id="next_button">See Result</button>
        </div>
      </form>';  
  }else{
    $QuestionsObj = new QuestionControl();
    $Question = $QuestionsObj->getNextQuestion($_GET['list']);
    echo $_GET['list'];
    echo 
    '<div class="alert alert-primary w-75 mx-auto mt-5" role="alert">
        <h1 class="text-center"> '. $Question->getContent() .' </h1>
      </div>
      <form method="" action="" class="container text-center">
        <input type="hidden" value="'. $Question->getID() .'" id="QuestionID">
        <div class="row row-cols-2">';

        $AnswersObj = new AnswerControl();
        $answers = $AnswersObj->getAnswers($Question->getID());
        foreach($answers as $answer){
          echo'<div class="col">      
                  <input type="radio" onclick="displayNext();" class="btn-check" value="'. $answer->getID() .'" name="vbtn-radio" id="vbtn-radio'. $answer->getID() .'">
                  <label class="btn btn-outline-primary py-3 mt-5 w-100" for="vbtn-radio'. $answer->getID() .'">'. $answer->getContent() .'</label>
                </div>';
        }  

      echo
        '</div>
        <div class="text-end">
          <button class="btn btn-primary px-5 mt-5 d-none" type="button" onclick="nextQuestion();" id="next_button">Next</button>
        </div>
      </form>';  
  }
}