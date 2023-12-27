<?php

require_once("../model/Question.php");

class QuestionControl extends Question{
  
  public function getNextQuestion($list){
    $DbQuestion = $this->getRandQuestion($list);
    $randQuestion = new Question;
    $randQuestion->setID($DbQuestion['questionID']);
    $randQuestion->setContent($DbQuestion['questionContent']);
    $randQuestion->setThemeID($DbQuestion['themeID']);
    return $randQuestion;
  }

  public function getStartQuestion(){
    $DbQuestion = $this->getFirstQuestion();
    $firstQuestion = new Question;
    $firstQuestion->setID($DbQuestion['questionID']);
    $firstQuestion->setContent($DbQuestion['questionContent']);
    $firstQuestion->setThemeID($DbQuestion['themeID']);
    return $firstQuestion;
  }

  public function getQuestion($questionID){
    $DbQuestion = $this->getQuestionByID($questionID);
    $Question = new Question;
    $Question->setID($DbQuestion['questionID']);
    $Question->setContent($DbQuestion['questionContent']);
    $Question->setThemeID($DbQuestion['themeID']);
    return $Question;
  }
}