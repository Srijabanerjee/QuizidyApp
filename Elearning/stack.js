const quizDB = [
  {
    question: "1. Which one of the following is an application of Stack Data Structure?   FM:10",
    a: "Managing function calls",
    b: "The stock span problem",
    c: "Arithmetic expression evaluation",
    d: "All of the above",
    ans: "ans4"
  },
  {
    question: "2. Inserting an element in stack is called _____.   FM:10",
    a: "Push",
    b: "pop",
    c: "del",
    d: "remove",
    ans: "ans1"
  },
  {
    question: "3. 2+3*5-6 to postfix is -    FM:10",
    a: "23*56-+",
    b: "25*36-+",
    c: "2*3-5+6",
    d: "235*6-+",
    ans: "ans4"
  },
  {
    question: "4. remove an element from empty stack is called   FM:10",
    a: "Overflow",
    b: "Underflow",
    c: "both",
    d: "None",
    ans: "ans2"
  },
  {
    question: "5. A-B/(C*D⋀E) to prefix is  FM:10",
    a: " -/*⋀ACBDE",
    b: " -A/B*C⋀DE",
    c: " -A/BC⋀DE*",
    d: " -A/BC*⋀DE",
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
