<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" id="test" value="1">
    <div id="time"></div>
</body>
    <!-- Formulir Sesi Dengan Modal Start-->

    <script>
        var test = document.getElementById("test").value;
        function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        hours = Math.floor(diff / ( 60 * 60));
        minutes = Math.floor((diff % ( 60 * 60)) / ( 60));
        seconds = Math.floor((diff % ( 60)));

        hours   = hours <10 && hours >= 0  ? "0" + hours : hours;
        minutes = minutes <10 && minutes >= 0  ? "0" + minutes : minutes;
        seconds = seconds <10 && seconds >= 0  ? "0" + seconds : seconds;
            display.textContent = hours + " : " + minutes + " : " + seconds;

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            clearInterval();
            display.textContent = "Waktu Proses Absensi Telah Habis";
            location.replace("/prosesvoting")
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}


window.onload = function () {
    var fiveMinutes = 60 * 0.1,
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
    </script>
</html>

