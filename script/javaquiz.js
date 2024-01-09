const quizData = [
    {
        question: 'What is the main purpose of the "public static void main(String[] args)" method in Java?',
        options: ['A) Initializing variables', 'B) Defining class properties', 'C) Entry point for program execution', 'D) Handling exceptions'],
        correctAnswer: 'C) Entry point for program execution'

    },
    {
        question: 'Which keyword is used to indicate that a variable should not be modified?',
        options: ['A) final', 'B) static', 'C) const', 'D) private'],
        correctAnswer: 'A) final'

    },
    {
        question: 'What is the purpose of the "super" keyword in Java?',
        options: ['A) Accessing superclass properties', 'B) Creating a new object', 'C) Specifying method visibility', 'D) Declaring constants'],
        correctAnswer: 'A) Accessing superclass properties'
        
    },
    {
        question: 'Which of the following is true about the "NullPointerException" in Java?',
        options: ['A) It is a checked exception', 'B) It is a runtime exception', 'C) It must be caught using try-catch', 'D) It occurs only with primitive data types'],
        correctAnswer: 'B) It is a runtime exception'
    },
    {
        question: 'What is the purpose of the "this" keyword in Java?',
        options: ['A) Referring to the current object', 'B) Creating a new instance', 'C) Calling static methods', 'D) Defining method visibility'],
        correctAnswer: 'A) Referring to the current object'
        
    },
    {
        question: 'What is the difference between "ArrayList" and "LinkedList" in Java?',
        options: ['A) ArrayList is synchronized, LinkedList is not', 'B) ArrayList allows random access, LinkedList does not', 'C) LinkedList uses less memory than ArrayList', 'D) There is no difference'],
        correctAnswer: 'B) ArrayList allows random access'

    },
    {
        question: 'Which of the following is an interface in Java?',
        options: ['A) AbstractClass', 'B) FinalClass', 'C) Serializable', 'D) StaticClass'],
        correctAnswer: 'C) Serializable'
    },
    {
        question: 'What is the purpose of the "try-catch" block in Java?',
        options: ['A) Declaring variables', 'B) Handling exceptions', 'C) Defining loops', 'D) Creating objects'],
        correctAnswer: 'B) Handling exceptions'
        
    },
    {
        question: 'Which method is used to explicitly finalize an object in Java?',
        options: ['A) close()', 'B) destroy()', 'C) finalize()', 'D) end()'],
        correctAnswer: 'C) finalize()'
        
    },
    {
        question: 'What is the role of the "javac" command in Java development?',
        options: ['A) Running Java applications', 'B) Debugging Java code', 'C) Compiling Java source code', 'D) Generating Java documentation'],
        correctAnswer: 'C) Compiling Java source code'

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