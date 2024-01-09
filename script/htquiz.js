const quizData = [
    {
        question: 'What does HTML stand for?',
        options: ['A) Hyper Text Markup Language', 'B) High-Level Text Management Language', 'C) Hyperlink and Text Markup Language', 'D) Hyper Transfer Markup Language'],
        correctAnswer: 'A) Hyper Text Markup Language'
    },
    {
        question: 'Which HTML tag is used to create a hyperlink?',
        options: ['A) <link>','B) <a>',' C) <hlink>','D) <url>'],
        correctAnswer: 'B) <a>'
    },
    {
        question: 'In HTML, what does the <head> element contain?',
        options: ['A) Document content', 'B) Metadata about the document', 'C) Main page content', 'D) JavaScript code'],
        correctAnswer: 'B) Metadata about the document'
    },
    {
        question: 'What is the purpose of the HTML <meta> tag?',
        options: ['A) Define a new meta-language', 'B) Embed multimedia content', 'C) Provide metadata about the document', 'D) Create a navigation menu'],
        correctAnswer: 'C) Provide metadata about the document'
    },
    {
        question: 'Which HTML element is used to define the structure of an HTML document?',
        options: ['A) <structure>', 'B) <body>', 'C) <html>', 'D) <document>'],
        correctAnswer: 'C) <html>'
    },
    {
        question: 'What is the correct way to comment out multiple lines in HTML?',
        options: ['A) <!-- This is a comment -->', 'B) // This is a comment //', 'C) /* This is a comment /', 'D) # This is a comment #'],
        correctAnswer: 'C) / This is a comment */'
    },
    {
        question: 'What is the purpose of the HTML <footer> element?',
        options: ['A) Define a section at the top of the page', 'B) Indicate the end of the document or a section', 'C) Create a navigation bar', 'D) Format text in a smaller size'],
        correctAnswer: 'B) Indicate the end of the document or a section'
    },
    {
        question: 'Which HTML attribute is used to provide alternative text for an image?',
        options: ['A) alt', 'B) text', 'C) description', 'D) img-alt'],
        correctAnswer: 'A) alt'
    },
    {
        question: 'What does the acronym "URL" stand for?',
        options: ['A) Uniform Resource Locator', 'B) Universal Reference Language', 'C) Unified Resource Listing', 'D) Underlying Resource Link'],
        correctAnswer: 'A) Uniform Resource Locator'
    },
    {
    question: 'Which HTML element is used to define an unordered list?',
    options: ['A) <ol>', 'B) <list>', 'C) <ul>', 'D) <order>'],
    correctAnswer: 'C) <ul>'
    }
];
let currentQuestion = 0;
let score = 0;

const questionElement = document.getElementById('question');
const optionsContainer = document.getElementById('options');
const resultElement = document.getElementById('result');

function loadQuestion() {
    const currentQuizData = quizData[currentQuestion];
    questionElement.textContent = currentQuizData.question;

    optionsContainer.innerHTML = '';
    currentQuizData.options.forEach((option, index) => {
        const button = document.createElement('button');
        button.textContent = option;
        button.classList.add('option');
        button.addEventListener('click', () => checkAnswer(index));
        optionsContainer.appendChild(button);
    });
}

function checkAnswer(selectedIndex) {
    const currentQuizData = quizData[currentQuestion];
    const selectedOption = currentQuizData.options[selectedIndex];

    if (selectedOption === currentQuizData.correctAnswer) {
        score++;
    }

    if (currentQuestion < quizData.length - 1) {
        currentQuestion++;
        loadQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    questionElement.style.display = 'none';
    optionsContainer.style.display = 'none';
    resultElement.textContent = `Your score: ${score} out of ${quizData.length}`;
}

function nextQuestion() {
    if (currentQuestion < quizData.length - 1) {
        currentQuestion++;
        loadQuestion();
    } else {
        showResult();
    }
}

function redirectToPage() {
    window.location.href = "test_challenges.php";
  }
  
// Εκκίνηση του quiz με την πρώτη ερώτηση
loadQuestion();