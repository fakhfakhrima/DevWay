//References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 8;
let countdown;

//Questions and Options array

const quizArray = [
    
    {
        id: "0",
        question: "What year was jQuery first released?",
        options: [" 2006", "2002", "2010", "2014"],
        correct: "2006",
    },
    {
        id: "1",
        question: "How do you include jQuery in your HTML file?",
        options: [" By creating a script tag with the jQuery source code", "Through a built-in HTML function", " By linking to an external CSS file", "By referencing a CDN link to the jQuery library"],
        correct: "By referencing a CDN link to the jQuery library",
    },
    {
        id: "2",
        question: "What is the current stable version of jQuery at the time of this quiz (April 2024)?",
        options: ["2.x", " 3.x", "4.x", "5.x"],
        correct: "4.x",
    },
    {
        id: "3",
        question: "Which symbol is used as a shortcut for jQuery in code?",
        options: ["$", " #", "@", " &"],
        correct: "$",
    },
     {
        id: "4",
        question: "How can you stop an ongoing animation in jQuery?",
        options: ["pause()", "stop()", "end()", "break()"],
        correct: "stop()",
    },
    {
        id: "5",
        question: " Which jQuery method is used to iterate over a set of elements? ",
        options: ["loop()", " iterate()","each()"," forAll()"],
        
        correct: "each()",
    },
    {
        id: "6",
        question: "What is the purpose of the serialize() method in jQuery?",
        options: ["Converts a form's data into a JSON object", " Serializes a string into an array", "Converts form data into a query string", "Serializes an array into a string"],
        correct: "Converts form data into a query string",
    },
    {
        id: "7",
        question: "How does the $.each() function differ from the .each() method in jQuery?",
        options: ["$.each() is used for looping over arrays, while .each() is used for looping over objects", "$.each() is a shorthand for .each()",".each() is used for looping over arrays, while $.each() is used for looping over objects","There is no difference; they can be used interchangeably"],
       
        correct: "$.each() is used for looping over arrays, while .each() is used for looping over objects",
    },
];

//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    
    `;
        quizContainer.appendChild(div);
    }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}

//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 11;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});

//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};