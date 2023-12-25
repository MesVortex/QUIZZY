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

}