const quizDB = [
  {
    question: "1.  The data structure required for Breadth First Traversal is  FM:10",
    a: "Stack",
    b: "Array",
    c: "Tree",
    d: "Queue",
    ans: "ans4"
  },
  {
    question: "2. A queue follows  FM:10",
    a: "LIFO",
    b: "both",
    c: "FIFO",
    d: "none",
    ans: "ans3"
  },
  {
    question: "3. Circular Queue is also known as  FM:10",
    a: "Ring Buffer",
    b: "Square Buffer",
    c: "Curve Buffer",
    d: "None",
    ans: "ans1"
  },
  {
    question: "4.  A data structure in which elements can be inserted or deleted at/from both ends but not in the middle is FM:10",
    a: "Queue",
    b: "dequeue",
    c: "Circular Queue",
    d: "None",
    ans: "ans2"
  },
  {
    question: "5. A normal queue, if implemented using an array of size MAX_SIZE, gets full when   FM:10",
    a: "Rear = MAX_SIZE – 1",
    b: " Front = rear + 1",
    c: "Front = (rear + 1)mod MAX_SIZE",
    d: "none",
    ans: "ans1"
  }
];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

const showscore = document.querySelector('#showscore');

let questionCount = 0;
let score = 0;

const loadQuestion = () => {
  const questionList = quizDB[questionCount];

  question.innerText = questionList.question;

  option1.innerText = questionList.a;
  option2.innerText = questionList.b;
  option3.innerText = questionList.c;
  option4.innerText = questionList.d;

}

loadQuestion();

const getCheckAnswer = () => {
  let answer;

  answers.forEach((curAnsElem) => {
    if(curAnsElem.checked){
      answer = curAnsElem.id;
    }


  });

return answer;
};

submit.addEventListener('click', () => {
  const checkedAnswer = getCheckAnswer();
  console.log(checkedAnswer);

  if(checkedAnswer === quizDB[questionCount].ans){
    score++;
  };
  questionCount++;
  if(questionCount < quizDB.length){
    loadQuestion();
  }else{

    showscore.innerHTML = `
    <h3 class="h">Total Score = ${score*10}/${quizDB.length*10}</h3>
    <button class="btn" onclick="location.reload()" data-inline="true">Try again</button>

    <button class="btn1" data-inline="true"> <a href="Start.php" class="ar">Quit Quiz</a> </button>

    `;
    showscore.classList.remove('scoreArea');

  }
});
