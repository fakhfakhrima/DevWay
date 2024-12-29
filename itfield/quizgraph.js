const quizData = [
    {
      id: "0",
      question: ' What software is the industry leader for raster image editing?',
      options: ['GIMP (Open-source alternative) ', 'Adobe Photoshop', 'Affinity Photo', ' Inkscape (Vector graphics)'],
      answer: 'Adobe Photoshop',
    },
    {
      id: "1",
      question: ' Which software is ideal for professional page layout and design?',
      options: ['Microsoft Word', ' Adobe InDesign', 'Adobe Photoshop', ' Sketch (Interface design focused)'],
      answer: ' Adobe InDesign',
    },
    {
      id: "2",
      question: ' What application excels in creating vector graphics and illustrations?',
      options: [' Adobe Illustrator', 'Adobe Photoshop ', ' Canva (Web-based design tool) ', ' Figma (Web-based design collaboration tool)'],
      answer: ' Adobe Illustrator',
    },
    {
      id: "3",
      question: ' What software is a popular choice for creating engaging presentations?',
      options: ['Microsoft PowerPoint', ' Adobe InDesign', 'Adobe Premiere Pro', ' Keynote (Apple ecosystem)'],
      answer: 'Microsoft PowerPoint',
    },
    {
      id: "4",
      question: 'What application is a powerful tool for creating motion graphics and animations?',
      options: [
        'Adobe After Effects',
        'Adobe Premiere Pro',
        'Adobe Illustrator',
        ' DaVinci Resolve',
      ],
      answer: 'Adobe After Effects',
    },
    {
        id: "5",
      question: ' What is the best practice for client communication in graphic design?',
      options: ['Limit communication to avoid revisions', ' Clearly define project scope and expectations at the beginning', 'Avoid sending mockups until the final design is complete', ' Only communicate via email'],
      answer: ' Clearly define project scope and expectations at the beginning',
    },
    {
        id: "6",
      question: 'What does responsive design mean in web design?',
      options: [
        'Using bright and responsive color palettes',
        'Designing a website that adapts to different screen sizes',
        'Creating interactive elements for user engagement',
        ' Prioritizing fast loading times on mobile devices',
      ],
      answer: 'Designing a website that adapts to different screen sizes',
    },
    {
        id: "7",
      question: 'What application is a cloud-based design collaboration platform for teams?',
      options: ['Adobe InDesign', ' Figma', 'Sketch', 'Canva'],
      answer: ' Figma',
    },
    {
        id: "8",
      question: 'What is a "favicon" in web design?',
      options: [
        'A large banner image at the top of a webpage',
        'The small icon displayed in the browser tab ',
        ' A pop-up window with additional information',
        ' A navigation menu on a website',
      ],
      answer: 'The small icon displayed in the browser tab',
    },
    {
        id: "9",
      question: '  What is a common file format used for saving lossless vector graphics?',
      options: ['JPEG (Lossy compression)', 'PNG (Lossless for images with transparency)', ' SVG (Scalable Vector Graphics)', 'Tiff'],
      answer: ' SVG (Scalable Vector Graphics)',
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