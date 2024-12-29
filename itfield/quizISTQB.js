const quizData = [
    {
      id: "0",
      question: '  What does ISTQB stand for?',
      options: ['International Software Testing Qualifications Board  ', 'Institute for Software Testing and Quality Assurance', ' International Software Testing Quality Benchmark', 'Information Systems Testing Qualification Bureau '],
      answer: 'International Software Testing Qualifications Board ',
    },
    {
      id: "1",
      question: ' What are the different types of software testing according to the ISTQB model?',
      options: ['User Acceptance Testing (UAT) and System Testing only', ' Functional and Non-Functional Testing', 'Black-box and White-box Testing', 'Regression Testing and Smoke Testing'],
      answer: ' Functional and Non-Functional Testing',
    },
    {
      id: "2",
      question: ' What is the primary focus of the ISTQB Foundation Level certification?',
      options: ['Advanced test automation techniques ', 'Software development methodologies (like Agile)', 'The fundamental principles and processes of software testing ', 'Specific testing tools and frameworks'],
      answer: 'The fundamental principles and processes of software testing',
    },
    {
      id: "3",
      question: ' What is the difference between a defect and a bug in software testing?',
      options: ['There is no difference, they are the same', 'A defect is the documented version of a bug', 'A bug is a programming error, a defect is a user-reported issue', 'A defect is always critical, a bug can be minor'],
      answer: 'A defect is the documented version of a bug',
    },
    {
      id: "4",
      question: 'What is the most common type of test case design technique used in ISTQB?',
      options: [
        'Equivalence Partitioning ',
        'Boundary Value Analysis',
        'Error Guessing',
        ' User Story Mapping',
      ],
      answer: 'Equivalence Partitioning',
    },
    {
        id: "5",
      question: 'What does the acronym "BDD" stand for in software testing?',
      options: ['Bug Detection and Debugging', 'Behavior Driven Development', 'Black-Box Design', 'Business Development Department'],
      answer: 'Behavior Driven Development',
    },
    {
        id: "6",
      question: '8. What is the difference between black-box testing and white-box testing?',
      options: [
        'Black-box tests functionality, white-box tests code structure',
        'Black-box testing is manual, white-box testing is automated',
        'Black-box testing requires coding knowledge, white-box does not',
        'Black-box tests are faster, white-box tests are more detailed',
      ],
      answer: 'Black-box tests functionality, white-box tests code structure',
    },
    {
        id: "7",
      question: ' What is the Agile Testing Manifesto centered around?',
      options: ['Prioritizing comprehensive test documentation', 'Agile Testing Manifesto emphasizes collaboration and rapid feedback', 'Focusing on extensive test automation before development ', 'Prioritizing detailed test plans over continuous testing'],
      answer: 'Agile Testing Manifesto emphasizes collaboration and rapid feedback',
    },
    {
        id: "8",
      question: 'What is the ethical responsibility of a software tester?',
      options: [
        'To prioritize speed and complete testing as quickly as possible.',
        ' To report all identified defects, regardless of severity',
        '  To focus on finding bugs to make developers look bad',
        '  To withhold information about critical defects discovered during testing',
      ],
      answer: ' To report all identified defects, regardless of severity',
    },
    {
        id: "9",
      question: ' What is the most common type of test case design technique used in ISTQB?',
      options: ['Equivalence Partitioning', ' Boundary Value Analysis', 'Error Guessing', 'User Story Mapping'],
      answer: 'Equivalence Partitioning',
    },

  ];
 

  
  const quizContainer = document.getElementById('quiz');
  const resultContainer = document.getElementById('result');
  const submitButton = document.getElementById('submit');
  const retryButton = document.getElementById('retry');
  const showAnswerButton = document.getElementById('showAnswer');
  
  let currentQuestion = 0;
  let score = 0;
  let incorrectAnswers = [];
  
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }
  
  function displayQuestion() {
    const questionData = quizData[currentQuestion];
  
    const questionElement = document.createElement('div');
    questionElement.className = 'question';
    questionElement.innerHTML = questionData.question;
  
    const optionsElement = document.createElement('div');
    optionsElement.className = 'options';
  
    const shuffledOptions = [...questionData.options];
    shuffleArray(shuffledOptions);
  
    for (let i = 0; i < shuffledOptions.length; i++) {
      const option = document.createElement('label');
      option.className = 'option';
  
      const radio = document.createElement('input');
      radio.type = 'radio';
      radio.name = 'quiz';
      radio.value = shuffledOptions[i];
  
      const optionText = document.createTextNode(shuffledOptions[i]);
  
      option.appendChild(radio);
      option.appendChild(optionText);
      optionsElement.appendChild(option);
    }
  
    quizContainer.innerHTML = '';
    quizContainer.appendChild(questionElement);
    quizContainer.appendChild(optionsElement);
  }
  
  function checkAnswer() {
    const selectedOption = document.querySelector('input[name="quiz"]:checked');
    if (selectedOption) {
      const answer = selectedOption.value;
      if (answer === quizData[currentQuestion].answer) {
        score++;
      } else {
        incorrectAnswers.push({
          question: quizData[currentQuestion].question,
          incorrectAnswer: answer,
          correctAnswer: quizData[currentQuestion].answer,
        });
      }
      currentQuestion++;
      selectedOption.checked = false;
      if (currentQuestion < quizData.length) {
        displayQuestion();
      } else {
        displayResult();
      }
    }
  }
  
  function displayResult() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'inline-block';
    //resultContainer.innerHTML = `You scored ${score} out of ${quizData.length}!`;
    let resultText = `You scored ${score} out of ${quizData.length}!`;

    if (score === quizData.length) {
      resultText += '<br>Congrats! Youre a future web developer!';
      confetti.start();

    }
    resultContainer.innerHTML = resultText;

  }

  

  
  function retryQuiz() {
    currentQuestion = 0;
    score = 0;
    incorrectAnswers = [];
    quizContainer.style.display = 'block';
    submitButton.style.display = 'inline-block';
    retryButton.style.display = 'none';
    showAnswerButton.style.display = 'none';
    resultContainer.innerHTML = '';
    displayQuestion();
    //stop confetti
    confetti.stop(); // Stop confetti animation
  // ...
  }
  
  function showAnswer() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'none';
  
    let incorrectAnswersHtml = '';
    for (let i = 0; i < incorrectAnswers.length; i++) {
      incorrectAnswersHtml += `
        <p>
          <strong>Question:</strong> ${incorrectAnswers[i].question}<br>
          <strong>Your Answer:</strong> ${incorrectAnswers[i].incorrectAnswer}<br>
          <strong>Correct Answer:</strong> ${incorrectAnswers[i].correctAnswer}
        </p>
      `;
    }

    //confetti start
    if (score === quizData.length) { // Start confetti if score is equal to total questions
      confetti.start();
    }
  
    resultContainer.innerHTML = `
      <p>You scored ${score} out of ${quizData.length}!</p>
      <p>Incorrect Answers:</p>
      ${incorrectAnswersHtml}
    `;
  }
  
  submitButton.addEventListener('click', checkAnswer);
  retryButton.addEventListener('click', retryQuiz);
  showAnswerButton.addEventListener('click', showAnswer);
  
  displayQuestion();




  // Add this code to the bottom of your script
const confetti = {
  start: function() {
    const canvas = document.createElement('canvas');
    canvas.style.position = 'fixed';
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.width = '100%';
    canvas.style.height = '100%';
    canvas.style.zIndex = '-1'; // Add this line to set the z-index of the canvas
    document.body.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    const particles = [];
    const particleCount = 200;
    const gravity = 0.05;
    const colors = ['#f00', '#00f', '#0f0', '#ff0', '#f0f'];

    function Particle() {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height;
      this.vx = Math.random() * 2 - 1;
      this.vy = Math.random() * 2 - 1;
      this.color = colors[Math.floor(Math.random() * colors.length)];
      this.size = Math.random() * 2 + 1;
    }

    Particle.prototype.update = function() {
      this.x += this.vx;
      this.y += this.vy;
      this.vy += gravity;
      this.size -= 0.1;

      if (this.size < 0) {
        particles.splice(particles.indexOf(this), 1);
      }
    };

    Particle.prototype.draw = function() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
      ctx.fillStyle = this.color;
      ctx.fill();
    };

    function init() {
      for (let i = 0; i < particleCount; i++) {
        particles.push(new Particle());
      }
    }

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      for (let i = 0; i < particles.length; i++) {
        particles[i].update();
        particles[i].draw();
      }

      requestAnimationFrame(animate);
    }

    init();
    animate();
  },
  stop: function() {
    document.body.removeChild(document.querySelector('canvas'));
  }
};