const quizDB = [
  {
    question: "1. for i in range(2, 14): if i%5 == 1:print(i);   FM:10",
    a: "6,11",
    b: "5,10",
    c: "a and b both",
    d: "None",
    ans: "ans1"
  },
  {
    question: "2. i=0; if i>3: print('True');   FM:10",
    a: "False",
    b: "True",
    c: "Can't say",
    d: "Nothing",
    ans: "ans4"
  },
  {
    question: "3. i=2; while(i>0): i=i-1  how many times the loop will run  FM:10",
    a: "1",
    b: "0",
    c: "3",
    d: "2",
    ans: "ans4"
  },
  {
    question: "4. Which one of the following is a valid Python if statement   FM:10",
    a: "if (a>=2)",
    b: "if a>=2:",
    c: "if (a>=2):",
    d: "if a>=2",
    ans: "ans2"
  },
  {
    question: "5. if/else into one line in python is possible? FM:10",
    a: "Yes",
    b: "No",
    c: "None",
    d: "Not used",
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
