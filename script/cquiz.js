const quizData = [
    {
        question: 'What is the purpose of the "printf" function in C?',
        options: ['A) Reading input from the user', 'B) Printing formatted output to the console', 'C) Allocating memory', 'D) Declaring variables'],
        correctAnswer: 'B) Printing formatted output to the console'

    },
    {
        question: 'Which symbol is used to represent a single-line comment in C?',
        options: ['A) //', 'B) /*', 'C) --', 'D) #'],
        correctAnswer: 'A) //'


    },
    {
        question: 'What is the purpose of the "sizeof" operator in C?',
        options: ['A) Calculating the size of a file', 'B) Determining the length of a string', 'C) Obtaining the size of a variable or data type', 'D) Allocating dynamic memory'],
        correctAnswer: 'C) Obtaining the size of a variable or data type'
       
    },
    {
        question: 'What is the purpose of the "break" statement in C?',
        options: ['A) Exiting a loop or switch statement', 'B) Skipping the next iteration of a loop', 'C) Terminating the program', 'D) Jumping to a specific label'],
        correctAnswer: 'A) Exiting a loop or switch statement'      
          },
    {
        question: 'Which library should be included to use the "scanf" function in C?',
        options: ['A) math.h', 'B) stdlib.h', 'C) conio.h', 'D) stdio.h'],
        correctAnswer: 'D) stdio.h'
                
    },
    {
        qquestion: 'What is the purpose of the "typedef" keyword in C?',
        options: ['A) Defining macros', 'B) Creating aliases for data types', 'C) Declaring variables', 'D) Specifying function prototypes'],
        correctAnswer: 'B) Creating aliases for data types'
        
    },
    {
        question: 'Which operator is used to access the value stored in a pointer variable in C?',
        options: ['A) &', 'B) *', 'C) ->', 'D) #'],
        correctAnswer: 'B) *'
            },
    {
        question: 'What does the "NULL" pointer represent in C?',
        options: ['A) Empty memory', 'B) End of a string', 'C) Uninitialized variable', 'D) No valid memory address'],
        correctAnswer: 'D) No valid memory address'
        
        
    },
    {
        question: 'Which data type is used to store whole numbers in C?',
        options: ['A) float', 'B) char', 'C) double', 'D) int'],
        correctAnswer: 'D) int'
        
        
    },
    {
        question: 'Which function is used to dynamically allocate memory in C?',
        options: ['A) malloc()', 'B) free()', 'C) realloc()', 'D) calloc()'],
        correctAnswer: 'A) malloc()'
        
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