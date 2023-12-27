<?php
session_start();
?>
<h1> CONGRATS <?php echo $_SESSION['Nickname']?></h1>

<?php 
echo 'correct answers:'.$_GET['correctAnswers'];
?>
<br>
<?php 
echo 'incorrect answers:'.$_GET['incorrectAnswers'];
?>
<br>
<?php
echo $_GET['list'];
?>