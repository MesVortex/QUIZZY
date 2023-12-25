<?php 
session_start();

if(!empty($_POST['Pseudonyme'])){
  $_SESSION['Nickname'] = $_POST['Pseudonyme'];
// }else{
//   $emptyNameERR = "please choose a Nickname first!!";
//   header("Location: ../index.php?error=". $emptyNameERR);
}

require_once("../controller/Question.php");
require_once("../controller/Answer.php");

$QuestionsObj = new QuestionControl();
$AnswersObj = new AnswerControl();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>QUIZZY</title>
</head>
<body>
  <header class="navbar bg-body-tertiary shadow border-bottom rounded-bottom-4">
    <div class=" | logo-box">
      <a class="navbar-brand" href="#">
        <img src="../images/Quizzy_Logo.png" style="width: 3rem;" class="logo" alt="">
      </a>
    </div>
  </header>

  <section>
    <p class="fw-bolder text-primary display-1 text-center mt-5" id="countdown"></p>
  </section>

  <section id="questionContent" class="d-none">
    <div class="alert alert-primary w-75 mx-auto mt-5" role="alert">
      <?php
      $Question = $QuestionsObj->getStartQuestion();
      ?>
      <h1 class="text-center" id="question"> <?php echo $Question->getContent(); ?> </h1>
    </div>
    <form method="" action="" class="container text-center">
      <input type="hidden" value="<?php echo $Question->getID(); ?>" id="QuestionID">
      <div class="row row-cols-2">
        <?php
        $answers = $AnswersObj->getAnswers($Question->getID());
        foreach($answers as $answer){
        ?>
        <div class="col">      
          <input type="radio" onclick="displayNext();" class="btn-check" value="<?php echo $answer->getID(); ?>" name="vbtn-radio" id="vbtn-radio<?php echo $answer->getID(); ?>">
          <label class="btn btn-outline-primary py-3 mt-5 w-100" for="vbtn-radio<?php echo $answer->getID(); ?>"><?php echo $answer->getContent(); ?></label>
        </div>
        <?php
        }
        ?>
      </div>
      <div class="text-end">
        <button class="btn btn-primary px-5 mt-5 d-none" type="button" id="next_button">Next</button>
      </div>
    </form>
  </section>

  <script src="../JS/countdown.js"></script>
  <script src="../JS/ajax.js"></script>
  <script src="../JS/nextButton.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>