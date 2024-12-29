const quizData = [
    {
      id: "0",
      question: ' What is the primary responsibility of an IT Project Manager?',
      options: ['To write complex code for software development   ', 'To lead and guide the project team to achieve project goals ', 'To design and develop the technical architecture of the system ', 'To handle daily network administration tasks'],
      answer: 'To lead and guide the project team to achieve project goals ',
    },
    {
      id: "1",
      question: 'What is the Project Management Institute (PMI) and what does it offer?',
      options: ['A software development company ', 'A professional organization for project managers, offering certifications like PMP', ' An online forum for discussing IT project challenges ', ' A recruiting agency specializing in IT project roles'],
      answer: 'A professional organization for project managers, offering certifications like PMP',
    },
    {
      id: "2",
      question: ' What is the importance of a Work Breakdown Structure (WBS) in project management?',
      options: ['To define the communication plan for the project team', 'To break down the project deliverables into smaller, manageable tasks', 'To track project budget and expenses in detail ', 'To identify and document project risks '],
      answer: 'To break down the project deliverables into smaller, manageable tasks ',
    },
    {
      id: "3",
      question: ' What are the different levels of ISTQB certification for software testers?',
      options: ['Foundation Level and Advanced Level', 'Beginner, Intermediate, and Expert', 'Certified Tester – Foundation Level (CTFL) and Certified Tester – Agile Tester (CT-AL)', 'Software Development Engineer in Test (SDET) I, II, and III'],
      answer: 'Foundation Level and Advanced Level',
    },
    {
      id: "4",
      question: 'What factors can influence the salary of an ISTQB certified tester?',
      options: [
        ' Certification level (Foundation or Advanced)',
        ' Location (country and city)',
        'Years of experience in software testing',
        'All of the above',
      ],
      answer: 'Certification level (Foundation or Advanced)',
    },
    {
        id: "5",
      question: 'On average, which salary range is typical for an entry-level ISTQB certified tester (Foundation Level) in the US?',
      options: ['$40,000 - $50,000', '$60,000 - $70,000 ', '$20,000 - $30,000', 'There is no fixed salary range for ISTQB testers'],
      answer: '$40,000 - $50,000',
    },
    {
        id: "6",
      question: 'What online resources can be helpful for researching ISTQB tester salaries in different countries?',
      options: [
        'Social media job postings only',
        'Salary comparison websites like Glassdoor or Indeed ',
        'ISTQB official website',
        'Online forums dedicated to software testing',
      ],
      answer: 'Salary comparison websites like Glassdoor or Indeed ',
    },
    {
        id: "7",
      question: 'How often are ISTQB certifications renewed?',
      options: ['ISTQB certifications do not expire', 'Certifications need to be renewed every year', 'Renewal depends on the specific level and certification body', 'There is no renewal process for ISTQB certifications'],
      answer: 'enewal depends on the specific level and certification body',
    },
    {
        id: "8",
      question: 'Which of the following is NOT a common testing methodology?',
      options: [
        '  Agile testing',
        ' Waterfall testing ',
        'Script-based testing ',
        'Exploratory testing',
      ],
      answer: 'Script-based testing ',
    },
    {
        id: "9",
      question: 'The primary purpose of IT test  is to:',
      options: [' Train users on new software', 'Identify and report software defects', 'Write marketing copy for IT products', 'Troubleshoot hardware issues '],
      answer: 'Identify and report software defects',
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