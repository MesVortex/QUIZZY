<?php

require_once("../model/Answer.php");

class AnswerControl extends Answer{
  
  public function getAnswers($questionID){
    $DbAnswers = $this->getQuestionAnswers($questionID);
    $Answers = array();
    $i = 0;
    foreach($DbAnswers as $A){
      $Answers[$i] = new Answer;
      $Answers[$i]->setID($A['answerID']);
      $Answers[$i]->setContent($A['answerContent']);
      $Answers[$i]->setQuestionID($A['questionID']);
      $Answers[$i]->setStatus($A['status']);
      $Answers[$i]->setExplanation($A['explanation']);
      $i++;
    }
    return $Answers;
  }

  public function getCorrectAnswerByID($questionID){
    $DbAnswers = $this->getCorrectAnswer($questionID);
    $Answers = new Answer;
    $Answers->setID($DbAnswers['answerID']);
    $Answers->setContent($DbAnswers['answerContent']);
    $Answers->setQuestionID($DbAnswers['questionID']);
    $Answers->setStatus($DbAnswers['status']);
    $Answers->setExplanation($DbAnswers['explanation']);
    return $Answers;
  }

  public function getAnswerByID($questionID){
    $DbAnswers = $this->getAnswer($questionID);
    $Answer = new Answer;
    $Answer->setID($DbAnswers['answerID']);
    $Answer->setContent($DbAnswers['answerContent']);
    $Answer->setQuestionID($DbAnswers['questionID']);
    $Answer->setStatus($DbAnswers['status']);
    $Answer->setExplanation($DbAnswers['explanation']);
    return $Answer;
  }

}