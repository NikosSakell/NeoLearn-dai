
const quizButton1 = document.getElementById('quizButton1');
const quizButton2 = document.getElementById('quizButton2');
const quizButton3 = document.getElementById('quizButton3');


quizButton1.addEventListener('click', function() {
    showQuizModal('You will transfer to a new window to take the quiz . It consists of 10 questions and you must choose 1 correct answer for each one'
    , 'htquiz.html');
});

quizButton2.addEventListener('click', function() {
    showQuizModal('You will transfer to a new window to take the quiz . It consists of 10 questions and you must choose 1 correct answer for each one', 'javaquiz.html');
});

quizButton3.addEventListener('click', function() {
    showQuizModal('You will transfer to a new window to take the quiz . It consists of 10 questions and you must choose 1 correct answer for each one', 'cquiz.html');
});

function showQuizModal(instructions, nextPage) {

    const modal = document.createElement('div');
    modal.id = 'quizModal';


    const modalContent = document.createElement('div');
    modalContent.id = 'modalContent';


    modalContent.textContent = instructions;


    const nextPageButton = document.createElement('button');
    nextPageButton.textContent = 'Start Quiz';
    nextPageButton.addEventListener('click', function() {
        window.location.href = nextPage;
    });


    modalContent.appendChild(nextPageButton);


    modal.appendChild(modalContent);

    
    document.body.appendChild(modal);


    modal.style.display = 'flex';


    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.removeChild(modal);
        }
    });
}
