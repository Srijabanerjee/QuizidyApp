const quizDB = [
  {
    question: "1. A linear collection of data elements where the linear node is given by means of pointer is called   FM:10",
    a: "Linked list",
    b: "Array",
    c: "None",
    d: "Both",
    ans: "ans1"
  },
  {
    question: "2.  What would be the asymptotic time complexity to add a node at the end of singly linked list,  FM:10",
    a: "O(1)",
    b: "O(n)",
    c: "θ(n)",
    d: "θ(1)",
    ans: "ans3"
  },
  {
    question: "3. What would be the asymptotic time complexity to add an element in the linked list   FM:10",
    a: "O(1)",
    b: "O(n)",
    c: "O(n^2)",
    d: "None",
    ans: "ans2"
  },
  {
    question: "4.  The concatenation of two list can performed in O(1) time. Which of the following variation of linked list can be used  FM:10",
    a: "Singly linked list",
    b: "Doubly linked list",
    c: "Array implementation of list",
    d: "Circular doubly linked list",
    ans: "ans4"
  },
  {
    question: "5.  In doubly linked lists, traversal can be performed  FM:10",
    a: "Only in forward direction",
    b: "Only in reverse direction",
    c: "Both",
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
