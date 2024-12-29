const quizData = [
    {
      id: "0",
      question: ' What is the primary role of a data analyst?',
      options: ['To collect and store large datasets   ', 'To extract insights and trends from data ', 'To design and develop complex algorithms  ', 'To create visually appealing presentations  '],
      answer: 'To extract insights and trends from data ',
    },
    {
      id: "1",
      question: 'What skill is essential for cleaning and preparing data for analysis?',
      options: ['Programming in Python  ', ' Data visualization techniques (important later)', 'Data wrangling', 'Machine learning algorithms'],
      answer: 'Data wrangling',
    },
    {
      id: "2",
      question: ' Which of these is an advantage of being a web developer?',
      options: ['High demand for skilled professionals and Opportunity to work remotely', 'None of the above', 'work extra time ', 'All of the above'],
      answer: 'High demand for skilled professionals and Opportunity to work remotely',
    },
    {
      id: "3",
      question: 'What does the acronym SQL stand for and what is it used for?',
      options: ['Structured Query Language - analyzing social media sentiment', 'Statistical Quality Logic - evaluating data accuracy  ', 'Standardized Query Language  - retrieving data from relational databases', 'Sequential Query Logic - performing calculations on datasets'],
      answer: 'Standardized Query Language  - retrieving data from relational databases',
    },
    {
      id: "4",
      question: ' What is the difference between supervised and unsupervised learning in data analysis?',
      options: [
        'Supervised learning requires coding, unsupervised learning does not. ',
        'Supervised learning deals with text data, unsupervised deals with numerical data.',
        ' Supervised learning is faster, unsupervised learning is slower.',
        'Supervised learning uses labeled data for prediction, unsupervised does not',
      ],
      answer: 'Supervised learning uses labeled data for prediction, unsupervised does not',
    },
    {
        id: "5",
      question: 'What is the role of communication in data analysis?',
      options: ['To present findings clearly and concisely to both technical and non-technical audiences', 'To write complex code for data manipulation ', ' To focus solely on technical aspects of data analysis ', ' To avoid interaction with stakeholders'],
      answer: 'To present findings clearly and concisely to both technical and non-technical audiences',
    },
    {
        id: "6",
      question: 'What does "A/B testing" refer to in data analysis?',
      options: [
        'Testing the accuracy of different data cleaning methods',
        ' Comparing two versions of a website or marketing campaign to see which performs better',
        ' Evaluating the effectiveness of different data visualization techniques',
        ' Stress testing a data analysis model for stability',
      ],
      answer: ' Comparing two versions of a website or marketing campaign to see which performs better',
    },
    {
        id: "7",
      question: 'What are some essential tools used by data analysts?',
      options: [' Microsoft Word and Excel (can be helpful, but...)', ' Spreadsheets and presentation software', ' Programming languages like Python, R, or SQL', ' d)   wyłącznie (wyłącznie is Polish for "only") data visualization tools' ],
      answer: ' Programming languages like Python, R, or SQL',
    },
    {
        id: "8",
      question: 'What is a skill that can be beneficial for web developers looking to specialize in back-end development?',
      options: [
        'Descriptive summarizes past data, predictive forecasts future trends ',
        'Descriptive uses complex algorithms, predictive is simpler ',
        'Descriptive focuses on text data, predictive focuses on numbers',
        'Descriptive requires a data science background, predictive does not',
      ],
      answer: 'Descriptive summarizes past data, predictive forecasts future trends  ',
    },
    {
        id: "9",
      question: 'When comparing salaries within the US, which factor can significantly impact a data analyst earning potential?',
      options: ['Age and experience', ' Educational background only', 'Location within the US', 'Gender'],
      answer: 'Age and experience',
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