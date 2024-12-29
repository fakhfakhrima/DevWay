const quizData = [
    {
      id: "0",
      question: 'The primary goal of content marketing is to:',
      options: ['Directly sell products or services', 'Build brand awareness and educate potential customers  ', ' Manage customer relationships after a purchase', ' Analyze website traffic data'],
      answer: 'Build brand awareness and educate potential customers',
    },
    {
      id: "1",
      question: 'Which social media platform is best for sharing short-form video content?',
      options: ['LinkedIn', 'Twitter', 'Instagram ', ' Pinterest'],
      answer: 'Instagram ',
    },
    {
      id: "2",
      question: 'Email marketing is most effective when:',
      options: ['Sending the same generic message to a large list', ' Segmenting your audience and personalizing emails ', ' Focusing solely on promotional offers ', 'Sending emails as frequently as possible '],
      answer: ' Segmenting your audience and personalizing emails',
    },
    {
      id: "3",
      question: 'Influencer marketing involves:',
      options: ['Running paid advertising campaigns on social media', 'Partnering with social media personalities to promote products or services  ', 'Creating content that encourages user-generated reviews', ' Optimizing a website for better search engine ranking'],
      answer: 'Partnering with social media personalities to promote products or services  ',
    },
    {
      id: "4",
      question: 'A strong brand identity in digital marketing includes:',
      options: [
        'A catchy tagline and a visually appealing logo',
        'A large number of social media followers',
        'Offering the lowest prices on products or services',
        'Running a high volume of online ads',
      ],
      answer: 'A catchy tagline and a visually appealing logo',
    },
    {
        id: "5",
      question: 'The best time to post on social media depends on:',
      options: ['A universal "golden hour" for all platforms', 'Analyzing your audience demographics and their online behavior ', 'Posting as frequently as possible', 'Mimicking the posting schedule of your competitors'],
      answer: 'Analyzing your audience demographics and their online behavior ',
    },
    {
        id: "6",
      question: 'Inbound marketing focuses on:',
      options: [
        'Disruptive advertising tactics',
        'Attracting customers through valuable content and building relationships  ',
        'Cold-calling potential customers',
        ' Purchasing email lists for mass marketing campaigns',
      ],
      answer: 'Attracting customers through valuable content and building relationships  ',
    },
    {
        id: "7",
      question: 'Chatbots can be used in digital marketing to:',
      options: ['Automate customer service inquiries', 'Generate creative content ideas', 'Design eye-catching infographics', 'Schedule social media posts for later'],
      answer: 'Automate customer service inquiries',
    },
    {
        id: "8",
      question: 'A good digital marketing strategy should be:',
      options: [
        'Static and unchanging',
        'Flexible and adaptable to changing trends, audience behavior, and results   ',
        'Focused solely',
          'None of the above   ',
      ],
      answer: 'Flexible and adaptable to changing trends, audience behavior, and results  ',
    },
    {
        id: "9",
      question: 'Analytics tools in digital marketing help track:',
      options: ['The number of times a brand is mentioned online', 'Only positive customer reviews', 'The design elements used on competitor websites', 'The personal information of website visitors'],
      answer: 'The number of times a brand is mentioned online',
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