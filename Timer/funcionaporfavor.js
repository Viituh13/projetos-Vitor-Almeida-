let gol = 0;
let vituh = 0;
let timerInterval;
let running = false;

function updateDisplay() {
    let totalMilliseconds = vituh + (running ? Date.now() - gol : 0);
    let milliseconds = Math.floor((totalMilliseconds % 1000) / 10);
    let seconds = Math.floor((totalMilliseconds / 1000) % 60);
    let minutes = Math.floor((totalMilliseconds / (1000 * 60)) % 60);

    document.getElementById("timer").textContent =
        (minutes < 10 ? "0" : "") + minutes + ":" +
        (seconds < 10 ? "0" : "") + seconds + ":" +
        (milliseconds < 10 ? "0" : "") + milliseconds;
}

function startTimer() {
    if (!running) {
        gol = Date.now() - vituh;
        timerInterval = setInterval(updateDisplay, 10);
        running = true;
    }
}

function pauseTimer() {
    if (running) {
        clearInterval(timerInterval);
        vituh += Date.now() - startTime;
        running = false;
    }
}

function resetTimer() {
    clearInterval(timerInterval);
    startTime = 0;
    vituh = 0;
    running = false;
    document.getElementById("timer").textContent = "00:00:00";
}
