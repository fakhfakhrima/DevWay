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
let count = 9;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: " What does Sass stand for?",
        options: ["Stylish and Secure Scripting", "Syntactically Awesome Style Sheets", " Simple and Short Scripting", "Structured and Standardized Styling"],
        correct: "Syntactically Awesome Style Sheets",
    },
    {
        id: "1",
        question: "Qu'est-ce que Sass ?",
        options: ["Un préprocesseur CSS", "Un langage de programmation", "Une bibliothèque JavaScript", "Un framework CSS"],
        correct: "Un préprocesseur CSS",
    },
    {
        id: "2",
        question: "Quelle est la principale fonctionnalité de Sass ?",
        options: ["Faciliter la création de pages web statiques", "Fournir des fonctionnalités de manipulation de base de données", "Permettre l'utilisation de variables, de mixins et de fonctions dans le CSS", "Transformer du JavaScript en CSS"],
        correct: "Permettre l'utilisation de variables, de mixins et de fonctions dans le CSS",
    },
    {
        id: "3",
        question: "Quelle est la syntaxe de base de Sass ?",
        options: ["Sass utilise une syntaxe similaire à celle du CSS", "Sass utilise une syntaxe similaire à celle du JavaScript", "Sass utilise une syntaxe similaire à celle du bootstrap", "Sass utilise une syntaxe similaire à celle du Python"],
        correct: "Sass utilise une syntaxe similaire à celle du CSS",
    },
    {
        id: "4",
        question: "Quelle est la fonctionnalité de l'opérateur '#' dans Sass ?",
        options: ["Il concatène des chaînes de caractères", "Il crée une interpolation", "Il sélectionne des éléments HTML", "Il crée des classes CSS"],
        correct: "Il crée des classes CSS",
    },
    {
        id: "5",
        question: "Quelle est la fonctionnalité de l'opérateur '%' dans Sass ?",
        options: ["Il concatène des chaînes de caractères", "Il sélectionne des éléments HTML", "Il crée une classe CSS que l'on peut étendre", "Il crée des fonctions"],
        correct: "Il crée une classe CSS que l'on peut étendre",
    }, {
        id: "6",
        question: "Sass preprocesses code before it's delivered to the browser. What are the two common file extensions used for Sass files?",
        options: [".css (output format), .sstyle", ".sass, .scss", ".scss, .sasscript", ".precss, .sass"],
        correct: ".sass, .scss",
    },
    {
        id: "7",
        question: "How do you define a mixin in Sass?",
        options: ["mixin name(arguments) { ... }", "function name(arguments) { ... }", "@mixin name: { ... }", "@define name(arguments) { ... }"],
        correct: "@mixin name: { ... }",
    },
    
    {
        id: "8",
        question: "What is the @import directive used for in Sass?",
        options: [" Declaring variables", "Defining mixins", "Including other Sass files", "Specifying output format"],
        correct: "Including other Sass files",
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