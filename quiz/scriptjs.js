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
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: "What year was JavaScript originally conceived by Brendan Eich?",
        options: [" 1980", "1990", "1995", "2000"],
        correct: "1995",
    },
    {
        id: "1",
        question: "What was the primary goal for creating JavaScript?",
        options: ["To replace HTML for web page structure", "To add interactivity and dynamic behavior to web pages", "To improve server-side scripting capabilities", "To create a language for mobile app development"],
        correct: "To add interactivity and dynamic behavior to web pages",
    },
    
    {
        id: "2",
        question: "What is the difference between var, let, and const for declaring variables?",
        options: ["There's no difference, they all work the same.", "var has global scope, let and const have block scope.", "var can be reassigned, let and const cannot.", "const is for constants, others are for variables. (Both let and const prevent reassignment)"],
        correct: "var has global scope, let and const have block scope.",
    },
    {
        id: "3",
        question: "What is the correct way to write an if statement in JavaScript?",
        options: ["if (condition) then { code }", "if condition { code }", "if (condition) { code }", "if = condition code"],
        correct: "if (condition) { code }",
    },
    {
        id: "4",
        question: "How do you define a function in JavaScript? ",
        options: ["function name(parameters) { code }", "define function name(parameters) { code }", "create function name(parameters) { code }", "var function name(parameters) = { code }"],
        correct: "function name(parameters) { code }",
    }, {
        id: "5",
        question: "What is an event listener in JavaScript?",
        options: ["A function that is executed when a specific event occurs (e.g., click, mouseover) ", "A variable to store data", "A loop structure", " A conditional statement"],
        correct: "A function that is executed when a specific event occurs (e.g., click, mouseover)",
    },
    {
        id: "6",
        question: " What data type is used to represent a single character in JavaScript?",
        options: ["string", "number","character","boolean"],
        
        correct: "character",
    },
    {
        id: "7",
        question: "What does the Math.random() function in JavaScript return?",
        options: ["A random integer between 0 and 1 (inclusive)", "A random integer within a specified range", "A random string", "The current date and time"],
        correct: "A random integer between 0 and 1 (inclusive)",
    },
    {
        id: "8",
        question: "What is the difference between document.getElementById and document.querySelector methods?",
        options: ["There's no difference, they both do the same thing", "getElementById finds elements by ID only, querySelector can use various selectors (e.g., class, tag name)","getElementById is faster, querySelector is slower","getElementById can only be used in the global scope, querySelector can be used anywhere"],
       
        correct: "getElementById finds elements by ID only, querySelector can use various selectors (e.g., class, tag name)",
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