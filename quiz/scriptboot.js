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
        question: "In what year was Bootstrap first publicly released?",
        options: ["2008", " 2010", " 2012", "2014"],
        correct: "2010",
    },
    
    {
        id: "1",
        question: "What pseudo-class is used to style an element when it is hovered over with the mouse?",
        options: [":active", ":link", ":hover", ":focus"],
        correct: ":hover",
    },
    
    {
        id: "2",
        question: "What class is used in Bootstrap to define the number of columns an element should occupy within a row?",
        options: [".col", ".row", ".container", ".grid"],
        correct: ".col",
    },
    {
        id: "3",
        question: "What utility class is used in Bootstrap to add spacing around elements (margins and padding)?",
        options: [".space", ".spacing", "Classes like .m-* and .p-* for margins and paddings respectively", "Inline styles with margin and padding properties"],
        correct: "Classes like .m-* and .p-* for margins and paddings respectively",
    }, {
        id: "4",
        question: "How do you include Bootstrap correctly(the most useful way) in your HTML project?",
        options: ["By directly copying the Bootstrap code into your HTML file (not recommended)", "By linking to the Bootstrap CDN (Content Delivery Network) libraries", "By downloading and including the Bootstrap files locally in your project", "By installing Bootstrap as a Node.js package (primarily for advanced usage)"],
        correct: "By linking to the Bootstrap CDN (Content Delivery Network) libraries",
    },
    {
        id: "5",
        question: "What classes can be used to define different sizes for buttons in Bootstrap?",
        options: [".size-*", "Classes like .btn-sm, .btn-lg, and .btn-md", "Inline styles with width and height properties", "By customizing button styles in a separate CSS file"],
        correct: "Classes like .btn-sm, .btn-lg, and .btn-md",
    },
    {
        id: "6",
        question: "How do you create a navigation bar that collapses on smaller screens in Bootstrap?",
        options: [" By hiding elements with JavaScript at specific breakpoints", "By using a combination of CSS media queries and Bootstrap's .navbar-collapse class", "There's no built-in functionality for collapsing navbars in Bootstrap", "By relying solely on media queries without Bootstrap classes"],
        correct: "By using a combination of CSS media queries and Bootstrap's .navbar-collapse class",
    },
    {
        id: "7",
        question: "How do you create a basic modal (popup window) using Bootstrap?",
        options: ["By including a separate JavaScript library for modals", "By using a combination of Bootstrap's .modal class, data attributes, and JavaScript for triggering the modal", "There's no built-in functionality for modals in Bootstrap", "By customizing the appearance of a popup window with CSS"],
        correct: "By using a combination of Bootstrap's .modal class, data attributes, and JavaScript for triggering the modal",
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