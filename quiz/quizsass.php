<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="stylesass.css">
    <title>Quiz</title>
    <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">

</head>

<body>
    <div class="start-screen">
        <button id="start-button">
            
            Start

        </button>
    </div>
    <div id="display-container">
        <div class="header">
            <div class="number-of-count">
                <span class="number-of-question">1 of 3 questions</span>
            </div>
            <div class="timer-div">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/time-and-date/stopwatch-icon.png"
                    width="20px" />
                <span class="time-left">10s</span>
            </div>
        </div>
        <div id="container">
            <!-- questions and options will be displayed here -->
        </div>
        <button id="next-button">Next</button>
    </div>
    <div class="score-container hide">
        <div id="user-score">Demo Score</div>
        <button id="restart">Restart</button>
    </div>

    <script src="scriptsass.js"></script>
</body>

</html>