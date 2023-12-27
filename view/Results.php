<?php
session_start();

if(isset($_GET['score']) && isset($_GET['incorrectAnswers']) && isset($_GET['list']) && isset($_GET['correctAnswers']) && $_SESSION['Nickname']){
  $score = intval($_GET['score']);
  $player = $_SESSION['Nickname'];
  $incorrectAnswers = $_GET['incorrectAnswers'];

  if($score >= 70){
    echo 
    '<div class="border rounded-pill border-primary shadow-lg w-50 mx-auto mt-5 py-5 bg-body-tertiary">
      <h2 class="text-center">CONGRATS <span class="text-primary">'.$player.'</span><i class="ms-3 fa-solid fa-graduation-cap fa-lg" style="color: #0d6efd;"></i></h2>
      <p class="text-center">A True <span class="text-primary">Genuis</span> Of This Century</p>
    </div>
    <div class="d-flex justify-content-center">
      <div class="border rounded-pill border-primary shadow-lg w-50 mt-5 py-5 bg-body-tertiary">
        <h2 class="text-center">You Obtained <span class="text-primary">'.$score.'%</span></h2>
        <p class="text-center">Click To See Correction <a href="./correction.php?incorrectAnswers='.$incorrectAnswers.'"><i class="fa-solid fa-wand-magic-sparkles" style="color: #0d6efd;"></i></a></p>
      </div>
    </div>
    <div class="carousel-indicators">
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1"></div>
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></div>
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></div>
    </div>';
  }else{
    echo 
    '<div class="border rounded-pill border-danger shadow-lg w-50 mx-auto mt-5 py-5 bg-body-tertiary">
      <h2 class="text-center">Off To a Good Start <span class="text-danger">'.$player.'</span><i class="ms-3 fa-solid fa-heart-crack fa-lg" style="color: #dc3545;"></i></h2>
      <p class="text-center">Good <span class="text-primary">Luck</span> Next Time</p>
    </div>
    <div class="d-flex justify-content-center">
      <div class="border rounded-pill border-primary shadow-lg w-50 mt-5 py-5 bg-body-tertiary">
        <h2 class="text-center">You Obtained <span class="text-danger">'.$score.'%</span></h2>
        <p class="text-center">Click To See Correction <a href="./correction.php?incorrectAnswers='.$incorrectAnswers.'"><i class="fa-solid fa-wand-magic-sparkles" style="color: #0d6efd;"></i></a></p>
      </div>
    </div>
    <div class="carousel-indicators">
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1"></div>
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></div>
      <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></div>
    </div>';
  }
}else{
  echo"I didn't make it";
}
?>