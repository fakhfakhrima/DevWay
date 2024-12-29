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
        question: "In what year was React first created?",
        options: ["2009", " 2011", " 2013", "2015"],
        correct: "2011",
    },
    {
        id: "1",
        question: "Who is credited with creating React?",
        options: [" John Resig", " Jordan Walke", "Douglas Crockford ", "Brendan Eich"],
        correct: "Jordan Walke",
    },
    
    
    {
        id: "2",
        question: "Which popular JavaScript library was heavily inspired by React's component-based architecture?",
        options: ["Angular", "Vue.js", " Ember.js", " Prototype.js"],
        correct: "Angular",
    },
    {
        id: "3",
        question: "What is the syntax extension used for writing UI structure in React?",
        options: [" RJSX", "JSX", "RML", "ReactML"],
        correct: "JSX",
    }, {
        id: "4",
        question: "What is the primary benefit of using the Virtual DOM in React?",
        options: ["Improved code readability", "Efficient UI updates", "Enhanced security", "Faster initial page load"],
        correct: "Efficient UI updates",
    },
    {
        id: "5",
        question: "What is the Virtual DOM in React?",
        options: ["A separate real-world computer used for complex UI calculations", "A lightweight in-memory representation of the actual browser Document Object Model (DOM)", "A fancy name for the browser's built-in DOM manipulation API", "A library that simplifies styling components in React"],
        correct: "A lightweight in-memory representation of the actual browser Document Object Model (DOM)",
    },
    {
        id: "6",
        question: "What is the role of a build tool like Webpack in a React project?",
        options: ["To define component hierarchy", "To bundle JavaScript files and assets", "To manage state mutations", "To handle asynchronous operations"],
        correct: "To bundle JavaScript files and assets",
    },
    {
        id: "7",
        question: "What is the purpose of the key prop in React lists?",
        options: ["To style individual list items", "To improve performance by identifying unique items", "To trigger re-renders for specific list items", "To store additional data for each list item"],
        correct: "To improve performance by identifying unique items",
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