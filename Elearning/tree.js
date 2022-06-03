const quizDB = [
  {
    question: "1. The no of external nodes in a full binary tree with n internal nodes is   FM:10",
    a: "n",
    b: "n+1",
    c: "2n",
    d: "n+2",
    ans: "ans2"
  },
  {
    question: "2. Which type of traversal of binary search tree outputs the value in sorted order   FM:10",
    a: "Pre-order",
    b: "both",
    c: "In-order",
    d: "none",
    ans: "ans3"
  },
  {
    question: "3.   If a node having two children is to be deleted from binary search tree, it is replaced by its  FM:10",
    a: "In-order predecessor",
    b: "Pre-order successor",
    c: "none",
    d: "In-order successor",
    ans: "ans4"
  },
  {
    question: "4.  The number of edges from the root to the node is called ____ of the tree.  FM:10",
    a: "Height",
    b: "Depth",
    c: "Width",
    d: "Length",
    ans: "ans2"
  },
  {
    question: "5.  What is the average case time complexity for finding the height of the binary tree  FM:10",
    a: "h = O(loglog n)",
    b: "h = O(log n)",
    c: "h = O(nlog n)",
    d: "None",
    ans: "ans2"
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
