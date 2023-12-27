<?php 

require_once("../controller/Question.php");
require_once("../controller/Answer.php");

$QuestionsObj = new QuestionControl();
$AnswersObj = new AnswerControl();
if(isset($_GET['incorrectAnswers'])){
  $incorrectAnswers = explode("," ,$_GET['incorrectAnswers']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <title>QUIZZY</title>
</head>
<body style="background-image: url(../images/image.png); background-size: cover;">
  <header class="navbar bg-body-tertiary shadow border-bottom rounded-bottom-4">
    <div class="logo-box">
      <a class="navbar-brand" href="#">
        <img src="../images/Quizzy_Logo.png" style="width: 3rem;" class="logo" alt="">
      </a>
    </div>
  </header>

  <section id="questionContent">
    <?php
    foreach($incorrectAnswers as $ID){
      $UserAnswer = $AnswersObj->getAnswerByID($ID);
      $correctAnswer = $AnswersObj->getCorrectAnswerByID($ID);
      $WrongQuestion = $QuestionsObj->getQuestion($UserAnswer->getQuestionID());
    ?>
    <div class="row justify-content-between mt-5">
      <div class="card col-5 ms-5 bg-danger">
        <div class="card-header">
          <?php echo $WrongQuestion->getContent(); ?>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><?php echo $UserAnswer->getContent(); ?></p>
            <footer class="blockquote-footer text-white">Your <cite title="Source Title">Answer</cite></footer>
          </blockquote>
        </div>
      </div>
      <div class="card col-5 me-5 bg-success">
        <div class="card-header">
        <?php echo $WrongQuestion->getContent(); ?>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p><?php echo $correctAnswer->getContent() ?></p>
            <footer class="blockquote-footer text-white">Correct <cite title="Source Title">Answer</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="card w-75 mx-auto mt-3">
      <div class="card-header">
        Explanation
      </div>
      <div class="card-body">
        <h5 class="card-title">Here's why</h5>
        <p class="card-text"><?php echo $correctAnswer->getExplanation() ?></p>
      </div>
    </div>
    <?php
    }
    ?>
    <a href="../index.php" class="btn btn-primary">Play Again</a>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>