const quizData = [
    {
      id: "0",
      question: 'What does a web developer do?',
      options: ['hack facebook accounts ', 'Build websites and applications', 'Fix computers', 'Design logos'],
      answer: 'Build websites and applications',
    },
    {
      id: "1",
      question: 'What is the average salary range for a web developer (in USD) globally?',
      options: ['$30,000 - $50,000', '$50,000 - $70,000', '$70,000 - $90,000', '$90,000 - $110,000'],
      answer: '$50,000 - $70,000',
    },
    {
      id: "2",
      question: ' Which of these is an advantage of being a web developer?',
      options: ['High demand for skilled professionals and Opportunity to work remotely', 'None of the above', 'work extra time ', 'All of the above'],
      answer: 'High demand for skilled professionals and Opportunity to work remotely',
    },
    {
      id: "3",
      question: 'What is the primary difference between a front-end and back-end developer?',
      options: ['Front-end deals with user experience, back-end deals with data.', 'Front-end uses HTML, back-end uses CSS.', 'Front-end focuses on mobile, back-end focuses on desktop.', 'Front-end writes content, back-end builds websites.'],
      answer: 'Front-end deals with user experience, back-end deals with data.',
    },
    {
      id: "4",
      question: 'What is a common way for web developers to test their code before deploying it to a live website?',
      options: [
        'Asking friends and family for feedback',
        'Unit testing',
        'Releasing a beta version publicly',
        'Using a spellchecker',
      ],
      answer: 'Unit testing',
    },
    {
        id: "5",
      question: 'A web developer needs to be a skilled graphic designer to be successful.',
      options: ['True', 'False', 'For sure', 'none of the above'],
      answer: 'False',
    },
    {
        id: "6",
      question: 'Which of these is NOT a common specialization for web developers?',
      options: [
        'Front-End Developer',
        'Back-End Developer',
        'Full-Stack Developer',
        'Search Engine Marketing Specialist',
      ],
      answer: 'Search Engine Marketing Specialist',
    },
    {
        id: "7",
      question: 'What does SEO stand for in web development?',
      options: ['Secure Encryption Online', 'Search Engine Optimization', 'Secure Electronic Orders', 'Structured Engineering Organization'],
      answer: 'Search Engine Optimization',
    },
    {
        id: "8",
      question: 'What is a skill that can be beneficial for web developers looking to specialize in back-end development?',
      options: [
        'User experience (UX) design',
        'Server administration ',
        'Graphic design',
        'Content writing',
      ],
      answer: 'Server administration ',
    },
    {
        id: "9",
      question: 'What is a skill that can be beneficial for web developers looking to specialize in front-end development?',
      options: ['Server administration', 'User interface (UI) design', 'Network security', 'Database management'],
      answer: 'User interface (UI) design',
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