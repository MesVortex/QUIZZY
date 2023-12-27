<?php

require_once("../config/DbConnect.php");

class Answer{
  private $answerID;
  private $answerContent;
  private $questionID;
  private $status;
  private $explanation;
  private $pdo;

  public function __construct(){
    $newConnection = Database::connectionCheck()->connect();
    $this->pdo = $newConnection;
  }

  public function getQuestionAnswers($questionID){
    $query = "SELECT * 
              FROM answers as a 
              WHERE a.questionID = :questionID";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(":questionID", $questionID);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getCorrectAnswer($answerID){
    $query = "SELECT * 
              FROM answers as a 
              WHERE questionID = (SELECT questionID FROM answers as a WHERE a.answerID = :answerID)
              AND a.status = 1";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(":answerID", $answerID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getAnswer($answerID){
    $query = "SELECT * 
              FROM answers as a 
              WHERE a.answerID = :answerID";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam(":answerID", $answerID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
  
  // SETTERS

  public function setID($newAnswerID){
    $this->answerID = $newAnswerID;
  }

  public function setContent($newAnswerContent){
    $this->answerContent = $newAnswerContent;
  }

  public function setQuestionID($newQuestionID){
    $this->questionID = $newQuestionID;
  }

  public function setStatus($newStatus){
    $this->status = $newStatus;
  }

  public function setExplanation($newExplanation){
    $this->explanation = $newExplanation;
  }

  // GETTERS

  public function getID(){
    return $this->answerID;
  }

  public function getContent(){
    return $this->answerContent;
  }

  public function getQuestionID(){
    return $this->questionID;
  }
  
  public function getStatus(){
    return $this->status;
  }

  public function getExplanation(){
    return $this->explanation;
  }

}
