<?php

require_once("../config/DbConnect.php");

class Question{
  private $questionID;
  private $questionContent;
  private $themeID;
  private $pdo;

  public function __construct(){
    $newConnection = Database::connectionCheck()->connect();
    $this->pdo = $newConnection;
  }

  public function getRandQuestion($pastQuestions){
    $query = "SELECT * 
              FROM questions as q 
              WHERE q.questionID 
              NOT IN ($pastQuestions)
              ORDER BY RAND()
              LIMIT 1;";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getFirstQuestion(){
    $query = "SELECT * 
              FROM questions  
              ORDER BY RAND()
              LIMIT 1;";
    $stmt = $this->pdo->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  // SETTERS

  public function setID($newQuestionID){
    $this->questionID = $newQuestionID;
  }

  public function setContent($newQuestionContent){
    $this->questionContent = $newQuestionContent;
  }

  public function setThemeID($newThemeID){
    $this->themeID = $newThemeID;
  }

  // GETTERS

  public function getID(){
    return $this->questionID;
  }

  public function getContent(){
    return $this->questionContent;
  }

  public function getThemeID(){
    return $this->themeID;
  }

}