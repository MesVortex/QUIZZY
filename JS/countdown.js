var countdownDuration = 0;

function updateCountdown() {
    document.getElementById('countdown').innerText = countdownDuration;
}

function startCountdown() {
    updateCountdown();

    var countdownInterval = setInterval(function () {
        countdownDuration--;

        if (countdownDuration < 0) {
            clearInterval(countdownInterval);
            document.getElementById('countdown').className= 'd-none';
            document.getElementById('questionContent').className = 'd-block';
        } else {
            updateCountdown();
        }

    }, 1100); 

 
}
window.onload = startCountdown;

///////////////////////////////////////////////////////
