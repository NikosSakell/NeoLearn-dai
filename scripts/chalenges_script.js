// Επιλέγουμε τα κουμπιά με βάση τα IDs
const quizButton1 = document.getElementById('quizButton1');
const quizButton2 = document.getElementById('quizButton2');
const quizButton3 = document.getElementById('quizButton3');

// Προσθήκη event listeners για το κλικ στα κουμπιά
quizButton1.addEventListener('click', function() {
    showQuizModal('You will transfer to a new window to take the quiz . It consists of 10 questions and you must choose 1 correct answer for each one'
    , 'htquiz.html');
});

quizButton2.addEventListener('click', function() {
    showQuizModal('Quiz 2 Instructions', 'quiz2.html');
});

quizButton3.addEventListener('click', function() {
    showQuizModal('Quiz 3 Instructions', 'quiz3.html');
});

function showQuizModal(instructions, nextPage) {
    // Δημιουργία του modal
    const modal = document.createElement('div');
    modal.id = 'quizModal';

    // Δημιουργία του περιεχομένου του modal
    const modalContent = document.createElement('div');
    modalContent.id = 'modalContent';

    // Προσθήκη οδηγιών στο περιεχόμενο του modal
    modalContent.textContent = instructions;

    // Δημιουργία κουμπιού για τη μετάβαση στην επόμενη σελίδα
    const nextPageButton = document.createElement('button');
    nextPageButton.textContent = 'Start Quiz';
    nextPageButton.addEventListener('click', function() {
        window.location.href = nextPage;
    });

    // Προσθήκη του κουμπιού στο περιεχόμενο του modal
    modalContent.appendChild(nextPageButton);

    // Προσθήκη του περιεχομένου στο modal
    modal.appendChild(modalContent);

    // Προσθήκη του modal στο body
    document.body.appendChild(modal);

    // Εμφάνιση του modal
    modal.style.display = 'flex';

    // Προσθήκη event listener για το κλικ εκτός του modal
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.removeChild(modal);
        }
    });
}
